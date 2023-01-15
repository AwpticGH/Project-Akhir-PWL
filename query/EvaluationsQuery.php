<?php
    namespace query;

    class EvaluationsQuery {
        //create evaluations
        public static $create_evaluation ="INSERT INTO evaluations SET
                                        evaluation = ?,
                                        date_of_evaluation =  ?,
                                        evaluation_for = ?,
                                        evaluation_by = ?";
        //read all evaluation by EvaluationForId
        public static $readallevalby_evalfor  ="SELECT * FROM evaluations WHERE evaluation_for= ?";
    }
?>