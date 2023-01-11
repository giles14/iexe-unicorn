<?php 
if ( !($args['diplomados']) ) {
?>
<select  class="form-control" name="programa" id="programa-interes" required>
    <option  value="SINA">-- Seleccionar Programa --</option>
    <optgroup  label="Licenciaturas">              
        <option  value="LCP">Ciencias Políticas y Administración Pública</option>
        <option  value="LSP">Seguridad Pública</option>
        <option  value="LAE">Administración de Empresas</option>
        <option  value="LD">Derecho</option>
    </optgroup>          
	<optgroup  label="Maestrías">  
	    <option  value="MFP">Finanzas Públicas</option>
		<option  value="MAPP">Administración y Políticas Públicas</option>
        <option  value="MEPP">Evaluación de Políticas Públicas</option>
		<option  value="MSPP">Seguridad Pública y Políticas Públicas</option>
		<option  value="MBAT">Administración de Negocios</option>
		<option  value="MITIC">Tecnologías de la Información</option>
        <option  value="MCDA">Ciencia de Datos Aplicada</option>
        <option  value="MIGE">Innovación y Gestión Educativa</option>
        <option value="MAIS">Administración de Instituciones de Salud</option>
	</optgroup>
    <optgroup  label="Doctorados">
	    <option  value="DOC">Doctorado en Políticas Públicas</option>
        <option  value="DSP">Doctorado en Seguridad Pública</option>
    </optgroup>
	<optgroup  label="Masters">
        <option value="MAG">Auditoria Gubernamental</option>
        <option value="MMPOP">Marketing Político y Opinión Pública</option>
        <option value="MGPM">Gestión Pública Municipal</option>
        <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral</option>
    </optgroup>
	<optgroup  label="Diplomados">
	    <option  value="DADFP">Alta Dirección en la Función Pública</option>
        <option  value="DADPP">Análisis y Diseño de Políticas Públicas</option>															
        <option  value="DEPP">Evaluación de Políticas Públicas</option>																	
        <option  value="DDFF">Disciplina Financiera y Fiscalización</option>
		<option  value="DPRSED">Presupuesto basado en Resultados y Sistema de Evaluación del Desempeño</option>
		<option  value="DHG">Diplomado en habilidades Gerenciales y Liderazgo</option>
	</optgroup>

</select>

<?php
}else{ ?>

<select  class="form-control" name="programa" id="programa-interes" required>
    <option  value="SINA">-- Seleccionar Programa --</option>
    <optgroup  label="Licenciaturas">              
        <option  value="LCP">Ciencias Políticas y Administración Pública</option>
        <option  value="LSP">Seguridad Pública</option>
        <option  value="LAE">Administración de Empresas</option>
        <option  value="LD">Derecho</option>
    </optgroup>          
	<optgroup  label="Maestrías">  
	    <option  value="MFP">Finanzas Públicas</option>
		<option  value="MAPP">Administración y Políticas Públicas</option>
        <option  value="MEPP">Evaluación de Políticas Públicas</option>
		<option  value="MSPP">Seguridad Pública y Políticas Públicas</option>
		<option  value="MBAT">Administración de Negocios</option>
		<option  value="MITIC">Tecnologías de la Información</option>
        <option  value="MCDA">Ciencia de Datos Aplicada</option>
        <option  value="MIGE">Innovación y Gestión Educativa</option>
        <option value="MAIS">Administración de Instituciones de Salud</option>
	</optgroup>
    <optgroup  label="Doctorados">
	    <option  value="DOC">Doctorado en Políticas Públicas</option>
        <option  value="DSP">Doctorado en Seguridad Pública</option>
    </optgroup>
	<optgroup  label="Masters">
        <option value="MAG">Auditoria Gubernamental</option>
        <option value="MMPOP">Marketing Político y Opinión Pública</option>
        <option value="MGPM">Gestión Pública Municipal</option>
        <option value="MSPAJ">Sistema Penal Acusatorio y Juicio Oral</option>
    </optgroup>

</select>

<?php
}
?>
