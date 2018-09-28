<template>
    <table class="table table-hover">
        <thead class="bg-primary">
            <tr>
                <th>Start At</th>
                <th>Finish At</th>
                <th>Clocked In</th>
                <th>Clocked Out</th>
                <th>Assignment</th>
                <th>Total Hours</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(assigned, index) in assignments" :key="assigned.id || index">

            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    name: "time-sheet",
    props: ['assignment-source'],
    data(){
        return {
            assignments: {}
        }
    }
}
</script>
