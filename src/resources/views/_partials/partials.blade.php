@verbatim
<el-table :data="data" style="width: 100%">
    <el-table-column type="expand">
        <template scope="props">
            <p>State: {{ props.row.state }}</p>
            <p>City: {{ props.row.city }}</p>
            <p>Address: {{ props.row.address }}</p>
            <p>Zip: {{ props.row.zip }}</p>
        </template>
    </el-table-column>
    <el-table-column label="Date" prop="date">
    </el-table-column>
    <el-table-column label="Name" prop="name">
    </el-table-column>
</el-table>
@endverbatim
