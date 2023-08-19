<?php
include 'config.php';

$userId = $_SESSION['user_id'];

$query = "SELECT * FROM tasks WHERE user_id = '$userId'";

if (isset($_POST['search'])) {
    $search_query = $_POST['search_query'];
    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM `tasks` WHERE user_id = '$user_id' AND (name LIKE '%$search_query%' OR description LIKE '%$search_query%' OR due_date LIKE '%$search_query%')";
}

$result = mysqli_query($conn, $query);

if (isset($_POST['update_status'])) {
    $task_id = $_POST['task_id'];
    $completed = isset($_POST['completed']) ? 1 : 0;

    $update_query = "UPDATE tasks SET completed = '$completed' WHERE id = '$task_id'";
    mysqli_query($conn, $update_query);
}
?>

<div class="container mt-5">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Task Name</th>
                <th scope="col">Description</th>
                <th scope="col">Due Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['due_date']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="task_id" value="<?php echo $row['id']; ?>">
                        <?php
                            $statusStyle = $row['completed'] ? 'color: green;' : 'color: red;';
                            ?>
                        <label>
                            <input type="checkbox" name="completed" <?php echo $row['completed'] ? 'checked' : ''; ?>
                                onchange="this.form.submit()">
                            <span style="<?php echo $statusStyle; ?>">
                                <?php echo $row['completed'] ? 'Completed' : 'Not Completed'; ?>
                            </span>
                        </label>
                        <input type="hidden" name="update_status" value="1">
                    </form>
                </td>
                <td>
                    <a href="edit_task.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete_task.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this task?')"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>