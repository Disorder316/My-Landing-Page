<h3>Find Your Sales Rep</h3>

<form name="sales-reps" id="sales-reps" action="#" method="get">

    <select name="territory-list" id="territory-list">
        <option value="0">Select a State or Country:</option>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/my-outside-wp/sales-reps/reps.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/my-outside-wp/sales-reps/state-list.php';

        $states = getTerritories();

        for ($i = 0; $i < count($states); $i++) {
            if (strlen($states[$i]['territory']) < 4) {
                echo '<option value="' . $states[$i]['territory'] . '">' . $state_list[$states[$i]['territory']] . '</option>';
            }
        }

        echo '<option value="Outside US">--- Outside the U.S. --- </option>';

        for ($i = 0; $i < count($states); $i++) {
            if (strlen($states[$i]['territory']) > 4) {
                echo '<option value="' . $states[$i]['territory'] . '">' . $states[$i]['territory'] . '</option>';
            }
        }
        ?>
    </select>
</form>

<div id="rep-display"></div>
 