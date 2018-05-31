<?php
namespace View;

class PageView
{
    public function __construct()
    {
    }

    public function index(array $data)
    {
        $path = \KANDT_ROOT_URI . \KANDT_ACTION_PARAM;
        ?>
        <table>
            <h1>index</h1>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            <?php
            if (!$data) { ?>
                <tr>
                    <td colspan="5">There is no page...</td>
                </tr>
                <?php
            } else {
                foreach ($data as $page) {
                    ?>
                    <tr>
                        <td>
                            <?= $page["id"] ?>
                        </td>
                        <td>
                            <?= $page["title"] ?>
                        </td>
                        <td>
                            <a href="<?= $path . "=page.show&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Show</a>
                        </td>
                        <td>
                            <a href="<?= $path . "=page.delete&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Delete</a>
                        </td>
                        <td>
                            <a href="<?= $path . "=page.edit&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
            } ?>
        </table>
        <?php
    }

    public function show(array $data)
    {
        $path = \KANDT_ROOT_URI . \KANDT_ACTION_PARAM;
        ?>
        <h1>h1: <?= $data["h1"] ?></h1>
        <h3>title: <?= $data["title"] ?></h3>
        <p>p: <?= $data["p"] ?></p>
        <span class="<?= $data["span-class"] ?>"><?= $data["span-text"] ?></span><br>
        <img src="<?= $data["img-src"] ?>" alt="<?= $data["img-alt"] ?>"><br>
        <a href="<?= $path . "=page.delete&" . \KANDT_PAGE_PARAM . "=" . $data["id"] ?>">Delete</a>
        <a href="<?= $path . "=page.edit&" . \KANDT_PAGE_PARAM . "=" . $data["id"] ?>">Edit</a>
        <a href="<?= $path . "=page.index" ?>">Home</a>
        <?php
    }

    public function edit(array $data)
    {
        ?>
        <form action="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.doEdit" ?>" method="post">
            <input type="text" name="id" value="<?= $data["id"] ?>" style="display: none"><br>
            <label for="h1">h1</label>
            <input type="text" name="h1" value="<?= $data["h1"] ?>"><br>
            <label for="title">title</label>
            <input type="text" name="title" value="<?= $data["title"] ?>"><br>
            <label for="p">p</label>
            <input type="text" name="p" value="<?= $data["p"] ?>"><br>
            <label for="span-src">span-class</label>
            <input type="text" name="span-class" value="<?= $data["span-class"] ?>"><br>
            <label for="span-alt">span-text</label>
            <input type="text" name="span-text" value="<?= $data["span-text"] ?>"><br>
            <label for="img-src">img-src</label>
            <input type="text" name="img-src" value="<?= $data["img-src"] ?>"><br>
            <label for="img-alt">img-alt</label>
            <input type="text" name="img-alt" value="<?= $data["img-alt"] ?>"><br>
            <input type="submit">
        </form>
        <a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.index" ?>">Home</a>
        <?php
    }

    public function delete(array $data)
    {
        ?>
        Are you sure you want to delete page "<?= $data["title"] ?>"?
        <form action="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.doDelete" ?>" method="post">
            <input type="text" name="id" value="<?= $data["id"] ?>" style="display:none">
            <input type="submit" value="Delete">
        </form>
        <?php
    }
}
