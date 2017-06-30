<template>
    <div class="posts container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>

                    <ul v-if="posts && posts.length">
                        <li v-for="post of posts">
                            <p><strong>{{ post.title.rendered }}</strong></p>
                            <div v-html="post.content.rendered"></div>
                        </li>
                    </ul>

                    <ul v-if="errors && errors.length">
                        <li v-for="error of errors">
                            {{ error.message }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data: () => ({
            posts: [],
            errors: []
        }),
        mounted() {
            console.log('Posts component is mounted.')
        },
        created() {
            // Fetches posts when the component is created.
            axios.get(`${App.root}wp/v2/posts`)
                .then(response => {
                    // JSON responses are automatically parsed.
                    this.posts = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    }
</script>
