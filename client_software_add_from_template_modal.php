<div class="modal" id="addSoftwareFromTemplateModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-fw fa-cube"></i> New License from Template</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
                <div class="modal-body bg-white">

                    <label>Template</label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-fw fa-puzzle-piece"></i></span>
                            </div>
                            <select class="form-control" name="software_template_id" required>
                                <option value="">- Select Template -</option>
                                <?php
                                $sql_software_templates = mysqli_query($mysqli, "SELECT * FROM software WHERE software_template = 1 AND company_id = $session_company_id AND software_archived_at IS NULL ORDER BY software_name ASC");
                                while($row = mysqli_fetch_array($sql_software_templates)){
                                    $software_template_id = $row['software_id'];
                                    $software_template_name = htmlentities($row['software_name']);

                                    ?>
                                    <option value="<?php echo $software_template_id ?>"><?php echo $software_template_name; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer bg-white">

                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add_software_from_template" class="btn btn-primary text-bold"><i class="fa fa-check"></i> Create</button>

                </div>
            </form>
        </div>
    </div>
</div>
