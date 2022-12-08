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

                            <div class="form-group">
                                <div class="col-sm-2" style="width:110px;">
                                    <label class="control-label">Scope:</label>
                                </div>
                                <div class="col-sm-4">
                                    <select name="ddl_stat" class="form-control input-sm">
                                        <option>UNLAWFUL USE OF MEANS OF PUBLICATION AND
                                            UNLAWFUL UTTERANCES (ART. 154)</option>;
                                        <option> ALARMS AND SCANDALS(ART.15) </option>
                                        <option> USING FALSE CERTIFICATES (ART. 175)</option>
                                        <option> USING FICTITIOUS NAMES AND CONCEALING TRUE
                                            NAMES (ART.178)</option>
                                        <option> ILLEGAL USE OF UNIFORMS AND INSIGNIAS (ART.
                                            179)</option>
                                        <option> PHYSICAL INJURIES INFLICTED IN A TUMULTUOUS
                                            AFFRAY(ART.252)</option>
                                        <option> GIVING ASSISTANCE TO CONSUMMATED
                                            SUICIDE(ART.253)</option>
                                        <option> RESPONSIBILITY OF PARTICIPANS IN A DUEL IF ONLY
                                            PHYSICAL INJURIES ARE INFLECTED OR NO PHYSICAL
                                            INJURIES HAVE VEEN INFLICTED (ART.260)</option>
                                        <option> LESS SERIOUS PHYSICAL INJURIES (ART.265)</option>
                                        <option> SLIGHT PHYSICAL INJURIES AND
                                            MALTREATMENT(ART.266)</option>
                                        <option> UNLAWFUL ARREST (ART.269)</option>
                                        <option> INDUCING A MINOR O ABANDON HIS/HER
                                            HOME(ART.271)</option>
                                        <option> ABANADONMENT OF A PERSON IN DANGER AND
                                            ABANDONMENT OF ONES OWN VICTIM (ART.275)</option>
                                        <option> ABANDONING A MINOR (CHILD UNDER SEVEN[7]
                                            YEARS OLD)(ACT.276)</option>
                                        <option> ABANDOMENT OF MINOR BY PERSON ENTRUSTED
                                            WITH HI/HER CUSTODY;INDIFIRENCE OF PARENTS
                                            (ART.277)</option>
                                        <option> QUALIFIED TRESSPASS TO DWELLING(WITHOUT THE
                                            USE OF VIOLENCE AND INTIMIDATION(ART.280)</option>
                                        <option> OTHER FORMS OF TRESSPASS(ART.281)</option>
                                        <option> GRAVE COERCION(ART.287)</option>
                                        <option> LGHT COERCION(ART.286)</option>
                                        <option> OTHER SIMILAR COERCIONS(COMPULORY PURCHASE
                                            OF MERCGANDISE AND PAYMENR OF WAGES BY
                                            MEANS OF TOKENS).(ART.288).</option>
                                        <option> OFFENSES INVOLVING GOVERMEN ENTITY</option>
                                        <option> ONE PARTY IS APUBLIC OFFICER/EMPLOYEE DISPUTE
                                            RELATES TO PERFORMANCE OF OFFICIAL FUNCTIONS</option>
                                        <option> OFFENSES WITH MACIMUM PENALTY OF 1 YEAR AND
                                            EXEEDING FINE FIVE THOUSAND(P5,000.00);</option>
                                        <option> OFFENSES WITH NO PRIVATE OFFENDE PARTY</option>
                                        <option> REAL PROPERTIES IN DIFFERENT CITES OR
                                            MUNICIPALITIES, DISPUTES THAT NEED URGENT
                                            LEGAL ACTION, LABOR DISPUTES, AND ACTION TO
                                            ANNUL A JUDGEMENT UPON A COMPROMISE.</option>
                                    </select>
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