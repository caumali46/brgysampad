<!-- ========================= MODAL ======================= -->
            <div id="reqModal" class="modal fade">
            <form method="post" action="function.php">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Business Permit</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Business Name:</label>
                                    <input name="txt_busname" class="form-control input-sm" type="text" placeholder="Business Name"/>
                                </div>
                                <div class="form-group">
                                    <label>Business Address:</label>
                                    <input name="txt_busadd" class="form-control input-sm" type="text" placeholder="Business Address"/>
                                </div>
                                <div class="form-group">
                                    <label>Type of Business:</label>
                                    <select name="ddl_tob" class="form-control input-sm">
                                        <option selected="" disabled="">-- Select Type of Business -- </option>
                                        <option value="Service">Service</option>
                                        <option value="Merchandising">Merchandising</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Hybrid Business">Hybrid Business</option>
                                    </select>                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_req" value="Request Permit"/>
                    </div>
                </div>
              </div>
              </form>
            </div>