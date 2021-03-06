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
            });
            
        </script>
    </head>
    <body>
        <h1>MyCPD</h1>
  
        <?= validation_errors(); ?>
        <?= form_open('learning_plan/create_activity/' . $employee_id) ?>

        <fieldset>
            <legend>Add new activity/event</legend>
            
            <label for="planned_date">Planned date</label>
            <input type="text" name="planned_date" id="planned_date" /><br />
            
            <label for="title">Title of activity/event</label> 
            <textarea name="title" cols="50" rows="3"></textarea><br />

            <label for="learning_outcomes">Intended learning outcomes</label>
            <textarea name="learning_outcomes" cols="50" rows="6"></textarea><br />
            
            <label for="intended_impact">Intended Impact</label>
            <textarea name="intended_impact" cols="50" rows="6"></textarea><br />
            
            <label for="impact">Impact</label>
            <textarea name="impact" cols="50" rows="6"></textarea><br />
            
            <label for="cpd_type_id">CPD type</label>
            <?= form_dropdown('cpd_type_id', $cpd_types) ?><br />

            <label for="learning_plan_target_id">Target</label>
            <?= form_dropdown('target_id',$targets) ?><br />

            <label for="priority_type_id">Priority</label>
            <?= form_dropdown('priority_type_id',$priorities) ?><br />

            <input type="submit" name="submit" value="Submit" /> 
            <input type="reset" name="reset" value="Reset" />
        </fieldset>

    </form>	
</body>
</html>