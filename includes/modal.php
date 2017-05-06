 <div class="modal fade" id="contact" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" method="post">
                        <div class="modal-header">
                            <h4>Contact</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="contact-name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name, Surname First" name="name" required>
                                </div>
                                <span class="valid col-sm-4"><?php echo $nameErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" placeholder="email@domail.com" name="email" required>
                                </div>
                                <span class="valid col-sm-4"><?php echo $emailErr; ?></span>
                            </div>
                            
                             <div class="form-group">
                                <label for="contact-phone" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" id="phone" placeholder="08012345678" name="phone" required>
                                </div>
                                 <span class="valid col-sm-4"><?php echo $phoneErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-2 control-label" required>Message</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="4" id="message" name="message" required></textarea>
                                </div>
                                <span class="valid col-sm-4"><?php echo $messageErr; ?></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                            <a class="btn btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>