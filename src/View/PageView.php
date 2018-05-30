<?php
namespace View;

class PageView
{
    public function __construct()
    {
    }

    public function index(array $data)
    {
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
            <?php
            if (!$data) { ?>
                <tr>
                    <td colspan="2">There is no page...</td>
                </tr>
                <?php
            } else {
                foreach($data as $page) {
                    ?>
                    <tr>
                        <td><?= $page["id"] ?></td>
                        <td><?= $page["title"] ?></td>
                    </tr>
                    <?php
                }
            } ?>
        </table>
        <?php
    }
}