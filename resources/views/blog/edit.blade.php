<x-layout>
    <div>
        <div class="container">
            <h2>Update Blog</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value="Sample Title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" placeholder="Enter description">Sample description</textarea>
                </div>
                <button type="submit" class="form-btn">Update Blog</button>
            </form>
            <br>
            <a href="#" class="action-link view-link">Back</a>
        </div>
    </div>
</x-layout>