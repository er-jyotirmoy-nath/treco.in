        <div class="container srv" ng-controller="designhomeCtrl">
            <div class="row mbp">
            <form name="designhomefrm" id="designhomefrm">
                <h2 class="page-header chdg">Design Center </h2>

                <div class="row row-pdt">General Information </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Project Name *</div>
                    <div class="col-md-2">
                    <input class="form-control" id="project-name" name="project-name" placeholder="Project Name" type="text" ng-model="smotik.project_name" required>
                    </div>
                    <div class="col-md-2 pdt">Project Type *</div>
                    <div class="col-md-2">
                    <input class="form-control" id="project-type" ng-disabled="new_cons || exe_cons" name="project-type" placeholder="Project Type" type="text" ng-model="smotik.project_type"  required>
                    </div>
                    <div class="col-md-2 pdt"><input name="PType" ng-model="smotik.project_type" 
                    ng-disabled="smotik.project_type" value="New Construction" type="radio"> New Construction</div>
                    <div class="col-md-2 pdt"><input name="PType" ng-model="smotik.project_type" value="New Construction"
                    ng-disabled="smotik.project_type" type="radio"> Existing Structure </div>
                </div>

                <div class="row row-pdt">Project Parameters </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Square Feet *</div>
                    <div class="col-md-2"><input class="form-control" id="square-feet" ng-model="smotik.square_feet" placeholder="Square Feet" type="text" required></div>
                    <div class="col-md-2 pdt">Floors *</div>
                    <div class="col-md-2"><input class="form-control" id="floors" ng-model="smotik.floors" placeholder="Floors" type="text" required></div>
                </div>

                <div class="row row-pdt">Contact Information </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Name *</div>
                    <div class="col-md-2"><input class="form-control" id="name" ng-model="smotik.name" placeholder="Name" type="text" required></div>
                    <div class="col-md-2 pdt">Address *</div>
                    <div class="col-md-2"><input class="form-control" id="address" ng-model="smotik.address" placeholder="Address" type="text" required></div>
                    <div class="col-md-2 pdt">City *</div>
                    <div class="col-md-2"><input class="form-control" id="city" ng-model="smotik.city" placeholder="City" type="text" required></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">State</div>
                    <div class="col-md-2"><input class="form-control" id="state" ng-model="smotik.state" placeholder="State" type="text" required></div>
                    <div class="col-md-2 pdt">Postal code</div>
                    <div class="col-md-2"><input class="form-control" id="postal-code" ng-model="postal_code" placeholder="Postal code" type="text" required></div>
                    <div class="col-md-2 pdt">Mobile *</div>
                    <div class="col-md-2"><input class="form-control" id="mobile" ng-model="smotik.mobile" placeholder="Mobile" type="text" required></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Phone</div>
                    <div class="col-md-2"><input class="form-control" id="phone" ng-model="smotik.phone" placeholder="Phone" type="text" required></div>
                    <div class="col-md-2 pdt">Email *</div>
                    <div class="col-md-2"><input class="form-control" id="email" ng-model="smotik.email" placeholder="Email" type="text" required></div>
                    <div class="col-md-2 pdt">Website</div>
                    <div class="col-md-2"><input class="form-control" id="website" ng-model="smotik.website" placeholder="Website" type="text" required></div>
                </div>

                <div class="row row-pdd hidden-xs">
                    <div class="col-md-4"><strong>Features of Interest</strong></div>
                    <div class="col-md-2"><strong>Interested</strong></div>
                    <div class="col-md-2"><strong>Not Interested</strong></div>
                    <div class="col-md-4"><strong>Additional Information</strong> </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Security</strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Burglar Alarm System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.security"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" ng-model="smotik.security"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="security_info" ng-model="smotik.security_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Surveillance Camera System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.camera"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" ng-model="smotik.camera"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="camera_info" ng-model="smotik.camera_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video Door Phone</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.VDP"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.VDP"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="vdp_info" ng-model="smotik.vdp_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Access Control System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.access"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.access"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="access_info" ng-model="smotik.access_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> <strong>Lighting Automation</strong></div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.lightWire"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.lightWire"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="lightwire_info" ng-model="smotik.lightwire_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> <strong>Curtain Control</strong></div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.curtain"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.curtain"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="curtain_info" ng-model="smotik.curtain_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Media / Entertainment</strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Multi-Room, Multi-Source Audio</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.audio"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.audio"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="audio_info" ng-model="smotik.audio_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Dedicated Home Theater / Media Room</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.theater"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.theater"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="theater_info" ng-model="smotik.theater_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video Distribution </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.video"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.video"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="video_info" ng-model="smotik.video_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Structured Cabling </strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Voice (Telephony), EPABX</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.Voice"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.Voice"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="voice_info" ng-model="smotik.voice_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Data (Computer Networking)</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.Data"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.Data"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="data_info" ng-model="smotik.data_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video (TV, Internal Video) </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.videotv"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.videotv"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="videotv_info" ng-model="smotik.videotv_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Technology-Enabled Services </strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Elderly Monitoring</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.homeAuto"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.homeAuto"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto_info" ng-model="smotik.homeauto_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Children Monitoring </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.homeAuto2"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.homeAuto2"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto2_info" ng-model="smotik.homeauto2_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> People with Disabilities </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.homeAuto3"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.homeAuto3"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto3_info" ng-model="smotik.homeauto3_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Asset Monitoring </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.media"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.media"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="media_info" ng-model="smotik.media_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Event Choreography </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" 
                    ng-model="smotik.event_Chr"  type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" 
                    ng-model="smotik.event_Chr"  type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div><input class="form-control" id="event_chr_info" ng-model="smotik.event_chr_info"  placeholder="" type="text" > </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-12">Please upload floor plans for your project. If you have to upload more than one file, kindly zip and send. If CAD files are not available, rough sketches drawn approximately to scale can be scanned as images and uploaded. Please email <a href="mailto:info@treco.in">info@treco.in</a>.in other relevant information and any additional drawings. </div>
                </div>

                <div class="row row-pdt">Key Objectives / Comments: </div>

                <textarea class="form-control" id="comments" ng-model="smotik.comments" placeholder="Your Comments" rows="4"></textarea><br>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default btn-primary pull-left" ng-disabled="designhomefrm.$invalid" ng-click="save_home_det(smotik)" type="submit" >
                        <span ng-bind-html="buttonmsg"></span></button>
                    </div>
                </div>
                </form>
            </div>
        </div>