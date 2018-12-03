<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>form select with logic conditions</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/select2.css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/select2.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="form1">
            <h2>Try to change the select option</h2>
            <select class="basic-multiple spark_trigger_list" id="designation" data-triggerid="trigger_1">
                <option value="">Sou</option>
                <option value="student" class="spark_trigger" data-trigger="student_option">Aluno</option>
                <option value="work at a company" class="spark_trigger" data-trigger="company_option">Trabalho numa Empresa</option>
            </select>
            <input class="spark_triggerable" data-trigger="student_option" data-triggerid="trigger_1" type="text" placeholder="Data de Término" id="datepicker">
            <input class="spark_triggerable" data-trigger="company_option" data-triggerid="trigger_1" type="text" placeholder="Empresa/Instituição">
            <input class="spark_triggerable" data-trigger="company_option" data-triggerid="trigger_1" type="text" placeholder="Função">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>