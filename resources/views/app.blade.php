<!DOCTYPE html>
<html>
<head>
    <title>Vue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
    	@include("navbar")

    	<main class="container py-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 photo" v-for="photo in photos">
                            <div class="card border-0 shadow">
                                <img class="card-img-top" v-bind:src="`https://placeimg.com/640/480/any?${photo.id}`" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title" v-text="photo.title"></h5>
                                    <p class="card-text" v-text="photo.content"></p>
                                    <a href="#" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Create</div>
                        <div class="card-body">
                            <form v-on:submit.prevent="add">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" class="form-control" v-model="photo.title">
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <input type="text" id="content" class="form-control" v-model="photo.content">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    	</main>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>