<?php
    /**
     * LIBRARY TO INTERACT WITH THE DATABASE
     */
     
     ########################################
     #                                      #
     # THESE FUNCTIONS HAVE NOT BEEN TESTED #
     #   Not even sure if I want all these  #
     #                                      #
     ########################################
     
     
     /**
      * Select all rows from $tableName where the clauses in $where hold true
      * 
      * @author Cathal Toomey
      * @version 1.0
      * @since 2.0
      * 
      * @param string $tableName The table to select data from
      * @param array $where The array of where clauses to check
      * @param integer $numRows The number of results to return
      * @return array The rows retrieved from the database
      * 
      */
     function select_all($tableName, &$where, $numRows = 0){
         $sql = "SELECT * FROM {$tableName}";
         $i = 0;
         foreach($where as $clause){
             $sql .= $i = 0 ? " WHERE " : " AND ";
             $sql .= $clause;
             $i++;
         }
         $sql .= $numRows > 0 ? " LIMIT {$numRows}";
         $sql .= ";";
     }
?>
