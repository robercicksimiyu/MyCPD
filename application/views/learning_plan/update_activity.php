<html>
    <head>
        <title>MyCPD Hub</title>
        <link href="<?= base_url('/assets/css/default.css') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#planned_date" ).datepicker({dateFormat: 'yy-mm-dd'});
                $( "#completed_date" ).datepicker({dateFormat: 'yy-mm-dd'});
            });
        </script>
    </head>
    <body>
        <h1>MyCPD</h1>
        <?= validation_errors(); ?>
        <?= form_open('learning_plan/update_activity/' . $id) ?>

        <fieldset>
            <label for="planned_date">Planned date</label>
            <input type="text" name="planned_date" id="planned_date" 
                   value="<?= $activity->planned_date ?>" /><br />
            
            <legend>Update activity/event</legend>
            <label for="title">Title of activity/event</label> 
            <textarea name="title"><?= $activity->title ?></textarea><br />

            <label for="learning_outcomes">Intended learning outcomes</label>
            <textarea name="learning_outcomes"><?= $activity->learning_outcomes ?></textarea><br />
            
            <label for="cpd_type_id">CPD type</label>
            <?= form_dropdown('cpd_type_id', $cpd_types, $activity->cpd_type_id) ?><br />

            <label for="target_id">Target</label>
            <?= form_dropdown('target_id', $targets, $activity->target_id) ?><br />

            <label for="priority_type_id">Priority</label>
            <?= form_dropdown('priority_type_id', $priorities, $activity->priority_type_id) ?><br />
            
            <label for="completed_date">Completed date</label>
            <input type="text" name="completed_date" id="completed_date" 
                   value="<?= $activity->completed_date ?>" /><br />
            
            <label for="evaluation_url">Evaluation url</label>
            <input type="text" name="evaluation_url" id="evaluation_url" 
                   value="<?= $activity->evaluation_url ?>" /><br />
            
            <label for="hours_of_cpd">Hours of CPD</label>
            <input type="text" name="hours_of_cpd" id="hours_of_cpd" 
                   value="<?= $activity->hours_of_cpd ?>" /><br />
            
            <label for="rating">Rating (1..5)</label>
            <input type="text" name="rating" id="rating" 
                   value="<?= $activity->rating ?>" /><br />
            <br />
            <input type="submit" name="submit" value="Submit" /> 
            <input type="reset" name="reset" value="Reset" />
        </fieldset>

    </form>	
</body>
</html>