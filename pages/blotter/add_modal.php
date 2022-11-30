<!-- ========================= MODAL ======================= -->
<div id="addModal1" class="modal fade">
    <form class="form-horizontal" method="post">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Blotter</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-md-2" style="width:110px;">
                                    <label class="control-label">Complainant:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_cname" class="form-control input-sm" type="text" placeholder="Complainant" required />
                                </div>

                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Age:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_cage" class="form-control input-sm" type="number" placeholder="Complainant Age" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2" style="width:110px;">
                                    <label class="control-label">Address:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_cadd" class="form-control input-sm" type="text" placeholder="Complainant Address" required />
                                </div>

                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Contact #:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_ccontact" class="form-control input-sm" type="number" placeholder="Contact #" />
                                </div>

                            </div>
                        </div>


                        <div class="col-sm-12">
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Complainee:</label>
                                </div>

                                <div class="col-sm-4">
                                    <input name="txt_pname" class="form-control input-sm" type="text" placeholder="Complainee" />
                                </div>

                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Age:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_page" class="form-control input-sm" type="number" placeholder="Complainee Age" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Address:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_padd" class="form-control input-sm" type="text" placeholder="Complainee Address" />
                                </div>

                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Contact #:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_pcontact" class="form-control input-sm" type="number" placeholder="Contact #" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Complaint:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_complaint" class="form-control input-sm" type="text" placeholder="Complaint" />
                                </div>
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Witness:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_witness" class="form-control input-sm" type="text" placeholder="Witness" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Status:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select name="ddl_stat" class="form-control input-sm">
                                        <option>Solved</option>
                                        <option>Unsolved</option>
                                    </select>
                                </div>

                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Incidence:</label>
                                </div>
                                <div class="col-sm-4">
                                    <input name="txt_location" class="form-control input-sm" type="text" placeholder="Location of Incidence" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Blotter" required />
                </div>
            </div>
        </div>
    </form>
</div>