<?php include "includes/header.php"; ?>


<div class="container-contact100">
    <div class="wrap-contact100" style="width: 80%;">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>İd</th>
                    <th>İsim</th>
                    <th>Email</th>
                    <th>Departman</th>
                    <th>Bütçe</th>
                    <th>Message</th>
                    <th>Tarih</th>
                </tr>
            </thead>
            <tbody><?php foreach ($items as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->name ?></td>
                        <td><?php echo $item->email ?></td>
                        <td><?php
                            foreach ($services as $service) {
                                if ($service->id == $item->service_id) {
                                    echo $service->service;
                                }
                            }
                            ?></td>
                        <td><?php echo $item->budget ?></td>
                        <td><?php echo substr($item->message, 0, 10) . "..." ?></td>
                        <td><?php echo $item->createdAt ?></td>

                    </tr><?php
                        } ?>
            </tbody>
        </table>
    </div>

</div>
<?php include "includes/footer.php"; ?>