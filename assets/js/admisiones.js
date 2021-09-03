$(document).ready(function(){
    $("#licenciaturas .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents(".los-requisitos").toggle();
        $('#licenciaturas .el-formulario').toggle().css("display: flex");
    });
    $("#licenciaturas .el-formulario .regresa-requisitos a").click(function(){
        $('#licenciaturas .los-requisitos').toggle();
        $(this).parents(".el-formulario").toggle();
    });
    $("#maestrias .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents('.los-requisitos').toggle();
        $('#maestrias .el-formulario').toggle().css("display: flex");
    });
    $("#maestrias .el-formulario .regresa-requisitos a").click(function(){
        $('#maestrias .los-requisitos').toggle();
        $(this).parents(".el-formulario").toggle();
    });
    $("#doctorado .los-requisitos .inicia-proceso a").click(function(){
        $(this).parents('.los-requisitos').toggle();
        $('#doctorado .el-formulario').toggle().css("display: flex");
    });
    $("#doctorado .el-formulario .regresa-requisitos a").click(function(){
        $('#doctorado .los-requisitos').toggle();
        $(this).parents("#doctorado .el-formulario").toggle();
    });

});