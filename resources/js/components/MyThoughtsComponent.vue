<template>
    <div class="row justify-content-center">

            <form-component @new="addThought"></form-component>

            <thought-component 
                v-for="(thought, index) in thoughts"
                :key="thought.id"
                :thought="thought"
                @update="updateThought(index, ...arguments)"
                @delete="deleteThought(index)">
            </thought-component>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                thoughts: [{
                    'id': 1,
                    'description': 'esta es la descripcion',
                    'created_at': '17/03/2022'
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            },
            updateThought(index, thought) {
                this.thoughts[index] = thought;
            },
            deleteThought(index) {
                this.thoughts.slice(index, 1);
            }
        }
    }
</script>
