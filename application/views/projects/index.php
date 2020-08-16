<h1>Projects</h1>
<p class="bg-success">
    <?php if ($this->session->flashdata('project_updated')) : ?>
        <?php echo $this->session->flashdata('project_updated'); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('project_created')) : ?>
        <?php echo $this->session->flashdata('project_created'); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('project_delete')) : ?>
        <?php echo $this->session->flashdata('project_delete'); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('task_updated')) : ?>
        <?php echo $this->session->flashdata('task_updated'); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('task_deleted')) : ?>
        <?php echo $this->session->flashdata('task_deleted'); ?>
    <?php endif; ?>
</p>

<a href="<?php echo base_url(); ?>projects/create" class="btn btn-primary float-right">Create Project</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Body</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project) : ?>
            <tr>
                <?php echo "<td><a href='" . base_url() . "projects/display/" . $project->id . "'>" . $project->project_name . "</a></td>"; ?>
                <?php echo "<td>" . $project->project_body . "</td>"; ?>

                <td><a class="btn btn-danger" href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id; ?>"> Delete Project</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php ?>