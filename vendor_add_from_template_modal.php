<div class="modal" id="addVendorFromTemplateModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-fw fa-building"></i> New Vendor from Template</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="post.php" method="post" autocomplete="off">

                <input type="hidden" name="client_id" value="<?php if (isset($_GET['client_id'])) { echo $client_id; } else { echo 0; } ?>">

                <div class="modal-body bg-white">

                    <label>Template</label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-fw fa-puzzle-piece"></i></span>
                            </div>
                            <select class="form-control" name="vendor_template_id" required>
                                <option value="">- Select Template -</option>
                                <?php
                                $sql_vendor_templates = mysqli_query($mysqli, "SELECT * FROM vendors WHERE vendor_template = 1 AND company_id = $session_company_id AND vendor_archived_at IS NULL ORDER BY vendor_name ASC");
                                while ($row = mysqli_fetch_array($sql_vendor_templates)) {
                                    $vendor_template_id = $row['vendor_id'];
                                    $vendor_template_name = htmlentities($row['vendor_name']);

                                    ?>
                                    <option value="<?php echo $vendor_template_id ?>"><?php echo $vendor_template_name; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer bg-white">

                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add_vendor_from_template" class="btn btn-primary text-bold"><i class="fa fa-check"></i> Create Vendor</button>

                </div>
            </form>
        </div>
    </div>
</div>
