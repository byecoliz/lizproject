<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <small>Welcome <h4><?php echo $this->session->userdata('username'); ?></h4>you can view your details here!
                        </small>


                    </div>

                    <?php


                    $image_properties = array(
                        'src' => '/img/image5.jpg',
                        'class' => 'featuredimg',
                        'width' => '40%'
                    );
                    echo img($image_properties);
                    ?>


                    <div>
                        Count of Waiting List &nbsp; <?php foreach ($count as $row) {
                            echo $row->MyCount;
                        } ?>
                    </div>

                    <div>
                        <h4>Planned Hospitalization</h4>
                        <table>
                            <tr></tr>
                            <tr>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Doctor</th>
                                <th>Location</th>
                                <th>Waiting Time(days)</th>
                            </tr>

                            <?php foreach ($rows as $r): ?>
                                <tr>
                                    <td align="center"><?php echo $r->WL_HOSPITALIZATION_DATE; ?></td>
                                    <td align="center"><?php echo $r->CLINICAL_DEPARTMENT; ?></td>
                                    <td align="center"><?php echo $r->Doctor; ?></td>
                                    <td align="center"><?php echo $r->Location; ?></td>
                                    <td align="center"><?php echo $r->Duration; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="list-group">
                <!--<a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Details</h4>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" id ="search"class="btn btn-default">Submit</button>
                </form>-->

                <p class="list-group-item-text">
                    Our selection of amazing stock photos and images is huge, with millions of professional photos that have been carefully chosen and sorted specifically for Microsoft Office users like you. Whether you are looking for cool backgrounds, clipart or digital pictures to illustrate PPT slide presentations, Outlook emails, webpages, printed brochures or other Word documents, we�ve got you covered. And whether your application is high-tech business, education or medical technology, and whether you are looking for something creative or corporate, you guessed it: We�ve got you covered.
                </p>


                <div>
                    <?php echo anchor('appointment/index', 'Make Appointment?'); ?>
                </div>

                <!--	</a>-->

            </div>
        </div>
    </div>

</div>