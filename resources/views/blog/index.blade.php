<x-layout>
  <div>
      <div class="container">
          <a href="#" class="create-blog-button">Create New Blog</a>
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Sample Blog Title</td>
                      <td>This is a sample blog description</td>
                      <td>2023-01-01</td>
                      <td class="action-buttons">
                          <a href="#" class="action-link view-link">View</a>
                          <a href="#" class="action-link edit-link">Edit</a>
                          <form action="#" method="post">
                              <button class="action-link delete-link">Delete</button>
                          </form>
                      </td>
                  </tr>
              </tbody>
          </table>
          <div class="pagination">
          </div>
      </div>
  </div>
</x-layout>