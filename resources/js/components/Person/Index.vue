<template>
    <section>
        <form-person>
        </form-person>
        <table-person ref="TablePerson">
        </table-person>
    </section>
</template>

<script>


import FormPerson from '../Person/FormPerson.vue'
import TablePerson from '../Person/Table.vue'

export default {
    components: {
        FormPerson,
        TablePerson
    }
}
</script>