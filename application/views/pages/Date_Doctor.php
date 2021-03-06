<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <h3>You are logged in as:
                            <small><?php echo $this->session->userdata('username'); ?></small>
                        </h3>
                    </div>


                    <div id="container">
                        <?php echo form_open('appointment'); ?>
                        <h5>Search by Department</h5>

                        <div><input type="text" name="dsearch" id="dsearch" size="30"/></div>
                        <div><input type="submit" value="Submit"/></div>
                        <?php echo form_close(); ?>

                        <script type="test/javascript" charset="utf-8">
            				$('tr.odd').css('background','#c3e3e3');
                        </script>

                        <?php if (!empty($this->session->userdata('dsearch'))) { ?>
                        <div>Department :: <?php echo $this->session->userdata('dsearch') ?></div>
                        <?php } ?>
                        <h3>Doctor shift</h3>
                        <?php echo $this->table->generate($search); ?>
                        <?php echo $this->pagination->create_links(); ?>

                    </div>


                </div>
            </div>
        </div>


    </div>

</div>