<!-- ========================= MODAL ======================= -->
<div id="addModal" class="modal fade">
    <form method="post">
        <div class="modal-dialog modal-sm" style="width:300px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Clearance</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Clearance #:</label>
                                <input name="txt_cnum" class="form-control input-sm" type="number" placeholder="Clearance #" required />
                            </div>
                            <div class="form-group">
                                <label>Resident:</label>
                                <input name="ddl_resident" required class="form-control input-sm" type="text" placeholder="First name" required style="margin-bottom:1em;" />
                                <input name="middlename" required class="form-control input-sm" type="text" placeholder="Middle name" required style="margin-bottom:1em;" />
                                <input name="lastname" required class="form-control input-sm" type="text" placeholder="Last name" required />
                            </div>
                            <div class="form-group">
                                <label>Findings:</label>
                                <input name="txt_findings" class="form-control input-sm" type="text" placeholder="Findings" required />
                            </div>
                            <div class="form-group">
                                <label>Purpose:</label>
                                <input name="txt_purpose" class="form-control input-sm" type="text" placeholder="Purpose" required />
                            </div>
                            <div class="form-group">
                                <label>OR Number:</label>
                                <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number" required />
                            </div>
                            <div class="form-group">
                                <label>Amount:</label>
                                <input name="txt_amount" class="form-control input-sm" type="number" placeholder="Amount" required />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Clearance" required />
                </div>
            </div>
        </div>
    </form>
</div>