<template>
    <table class="table table-hover">
        <thead class="bg-primary">
            <tr>
                <th>Date</th>
                <th>Start At</th>
                <th>Finish At</th>
                <th>Clocked In</th>
                <th>Clocked Out</th>
                <th>Project</th>
                <th>Task/Work Order</th>
                <th>Total Hours</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(assigned, index) in assignments" :key="assigned.id || index">
                <td>TBD</td>
                <td>TBD</td>
                <td>TBD</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    name: "time-sheet",
    props: ['source'],
    data(){
        return {
            assignments: {}
        }
    },
    mounted(){
        let self = this;

        axios.get(self.source)
            .then(res => self.assignments = res.data)
            .catch(err => errors = err.response.data || err.message );
    }
}
</script>
