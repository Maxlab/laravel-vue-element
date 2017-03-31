@extends('_layouts.base')

@section('meta.title', 'Hello World!')
@section('head')
    @parent

    <style>
        .body {
            background-color: #636b6f;
        }
        .avatar-uploader .el-upload {
            border: 1px dashed #d9d9d9;
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .avatar-uploader .el-upload:hover {
            border-color: #20a0ff;
        }

        .avatar-uploader-icon {
            font-size: 28px;
            color: #8c939d;
            width: 178px;
            height: 178px;
            line-height: 178px;
            text-align: center;
        }

        .avatar {
            width: 178px;
            height: 178px;
            display: block;
        }
    </style>
@endsection

@section('content')
    <el-upload
            class="avatar-uploader"
            action="/blackhole"
            :show-file-list="false"
            :on-success="handleAvatarScucess"
            :before-upload="beforeAvatarUpload">
        <img v-if="imageUrl" :src="imageUrl" class="avatar">
        <i v-else class="el-icon-plus avatar-uploader-icon"></i>
    </el-upload>
@endsection

@section('js')
    <script>
        var vm = new Vue({
            el: '#app',
            data: {
                imageUrl: ''
            },
            methods: {
                handleAvatarScucess(res, file) {
                    this.imageUrl = URL.createObjectURL(file.raw);
                },
                beforeAvatarUpload(file) {
                    const isJPG = file.type === 'image/jpeg';
                    const isLt2M = file.size / 1024 / 1024 < 2;

                    if (!isJPG) {
                        this.$message.error('Avatar picture must be JPG format!');
                    }
                    if (!isLt2M) {
                        this.$message.error('Avatar picture size can not exceed 2MB!');
                    }
                    return isJPG && isLt2M;
                }
            }
        });
    </script>
@endsection
    