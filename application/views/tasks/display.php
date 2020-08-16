<h1>Task Display View</h1>


<table class="table table-hover table-border">
    <thead>
        <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Date Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="task-name">

                    <?php echo $task->task_name; ?>
                </div>
                <div class="task-actions">
                    <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
                    <a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id . "/" . $task->id; ?>">Delete</a>
                </div>
            </td>
            <td><?php echo $task->task_body; ?></td>
            <td><?php echo $task->date_created; ?></td>
            <td><a href="<?php echo base_url() ?>tasks/mark_completed/<?php echo $task->id; ?>">Mark as completed</a></td>
            <td><a href=" <?php echo base_url() ?>tasks/mark_incompleted/<?php echo $task->id; ?>">Mark as not completed</a> </td>
        </tr>
    </tbody>
</table>