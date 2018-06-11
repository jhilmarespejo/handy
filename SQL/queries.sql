INSERT INTO `datos_nino` (`id_nino`, `id_centro_infantil`, `fecha_registro`, `paterno`, `materno`, `nombres`, `fecha_nacimiento`, `edad`, `sexo`, `municipio`, `macrodistrito`, `zona_barrio`, `calle_avenida`, `num_vivienda`, `certificado_nacimiento`, `cedula_identidad`, `num_cedula_identidad`, `tipo_seguro_salud`, `otro_tipo_seguro_salud`, `valor_tipo_seguro_salud`, `carnet_vacunas`, `valor_carnet_vacunas`, `peso`, `talla`, `dk`, `vacunacion_completa`, `tipo_discapacidad`, `discapacidad`, `valor_tipo_discapacidad`) VALUES (NULL, 'c001', '2016-06-07 00:00:00', 'Flores', 'Mamani', 'YAQUELIN ESTEFANY', '2011-01-16 00:00:00', '5', 'f', 'el alto', 'macrodistrito 2', 'zona 2', 'calle numero dos', '65', 's', 's', '949862', 'caja nacional', 'ninguno', '99', 's', '99', '40', '1.20', 'dk', 's', 'n', 'ninguna', '99');

INSERT INTO `datos_nino` VALUES (NULL, 'c001', '2016-06-07 00:00:00', 'Canaviri', 'Alavi', 'Samara Melani', '2012-02-16 00:00:00', '4', 'f', 'el alto', 'macrodistrito 2', 'zona 2', 'calle numero tres', '60', 's', 's', '36514968', '', 'ningun tipo de seguro', '88', 's', '88', '45', '1.10', 'dk', 's', 'n', 'ninguna', '90');



CREATE TABLE IF NOT EXISTS `manitos`.`aportes_gastos` (
`id` INT NOT NULL AUTO_INCREMENT,
`cim` VARCHAR(250) NULL,
`aporte_fijado` VARCHAR(50) NULL,
`aporte_completo` VARCHAR(50) NULL,
`aporte_parcial` VARCHAR(50) NULL,
`sin_aporte` VARCHAR(50) NULL,
`becados` VARCHAR(50) NULL,
`total` VARCHAR(50) NULL,
`energia_electrica` VARCHAR(50) NULL,
`agua` VARCHAR(50) NULL,
`telefonia` VARCHAR(50) NULL,
`flete_almacenamiento` VARCHAR(50) NULL,
`mantenimiento_reparacion_inmuebles` VARCHAR(50) NULL,
`fotocopia_fotografia` VARCHAR(50) NULL,
`alimentacion_hospitalaria_otros` VARCHAR(50) NULL,
`combustible_consumo` VARCHAR(50) NULL,
`productos_quimicos_farmaceiticos` VARCHAR(50) NULL,
`material_limpieza` VARCHAR(50) NULL,
`utiles_educacion_capacitacion` VARCHAR(50) NULL,	
`maquinaria_equipo` VARCHAR(50) NULL,
`total_gasto` VARCHAR(50) NULL,
`saldo_anterior` VARCHAR(50) NULL,
`ingreso_monetario` VARCHAR(50) NULL,	
`saldo_sig_periodo` VARCHAR(50) NULL,
`ingreso_no_monetario` VARCHAR(50) NULL,
`otros_aportes` VARCHAR(50) NULL,
`obs` VARCHAR(50) NULL,
`gestion` VARCHAR(50) NULL,
`mes` VARCHAR(50) NULL,
 PRIMARY KEY (`id`))
ENGINE = InnoDB



CREATE TABLE IF NOT EXISTS `manitos`.`h_modalidad_indirecta` (
`id` INT NOT NULL AUTO_INCREMENT,
`identificacion_nino` VARCHAR (250),
`identificacion_local` VARCHAR (250),
`estatus` VARCHAR (150),
`familia_cuidador_a` VARCHAR (150),
`nombre_comunidad` VARCHAR (150),
`nombre` VARCHAR (50),
`apellidos` VARCHAR (100),
`fecha_nacimiento` VARCHAR (100),
`sexo` VARCHAR (10),
`edad_nino` VARCHAR (50),
`duración_estancia_dias` VARCHAR (10),
`fecha_traslado1` VARCHAR (50),
`motivo_traslado1` VARCHAR (50),
`fecha_traslado2` VARCHAR (50),
`motivo_traslado2` VARCHAR (50),
`fecha_traslado3` VARCHAR (50),
`motivo_traslado3` VARCHAR (50),
`relacion_cuidador_a_principal` VARCHAR (150),
`relacion_el_cuidador_secundario` VARCHAR (150),
`notas_sobre_relación_cuidador_a` VARCHAR (350),
`nacionalidad` VARCHAR (50),
`notas` VARCHAR (350),
`nino_asiste_centro_educativo_sos` VARCHAR (50),
`centro_educativo_sos` VARCHAR (50),
`centro_educativo_no_sos` VARCHAR (50),
`matricula_escolar_vigente` VARCHAR (50),
`desempeno_escolar` VARCHAR (50),
`asistencia_escolar` VARCHAR (50),
`grado_académico_ano` VARCHAR (50),
`notas_sobre_educación` VARCHAR (350),
`discapacidad` VARCHAR (50),
`descripcion_discapacidad` VARCHAR (50),
`nino_discapacidad_recibe_apoyo` VARCHAR (50),
`tipo_apoyo_ninos_con_discapacidad` VARCHAR (50),
`nino_recibio_vacunas_acuerdo_estandares_nacionales` VARCHAR (50),
`notas_tipos_vacunas` VARCHAR (350),
`vacuna_contra_polio` VARCHAR (50),
`proxima_fecha_vacuna_polio` VARCHAR (50),
`vacuna_pentavalente` VARCHAR (50),
`proxima_fecha_vacuna_pentavalente` VARCHAR (50),
`vacuna_contra_tb` VARCHAR (50),
`proxima_fecha_vacuna_tb` VARCHAR (50),
`vacuna_contra_sarampion` VARCHAR (50),
`proxima_fecha_vacuna_sarampión` VARCHAR (50),
`otras_vacunas` VARCHAR (50),
`proxima_fecha_otras_vacunas` VARCHAR (50),
`enfermedad_grave` VARCHAR (50),
`estado_nutricional` VARCHAR (50),
`atencion_medica_recibida` VARCHAR (50),
`tiene_vih_sida` VARCHAR (50),
`recibe_tratamiento_vih_sida` VARCHAR (50),
`abuso_emocional_psicológico` VARCHAR (50),
`abuso_sexual` VARCHAR (50),
`negligencia_trato_negligente` VARCHAR (50),
`abuso_fisico` VARCHAR (50),
`violacion_privacidad_infantil` VARCHAR (50),
`preocupaciones_proteccion_infantil` VARCHAR (50),
`notas_salud` VARCHAR (350),
`desarrollo_psicosocial` VARCHAR (50),
`identidad_legal` VARCHAR (50),
`notas_sobre_desarrollo_psicosocial` VARCHAR (350),
`tratamiento_psicologico_infantil` VARCHAR (50),
`suministrado_por` VARCHAR (50),
`pago_serv_atencion_medica_primaria` VARCHAR (50),
`atencion_med_suministrado_por` VARCHAR (50),
`sesiones_informativas_sobre_derechos_ninos` VARCHAR (50),
`sesiones_informativas_suministrado_por` VARCHAR (50),
`apoyo_educativo_despues_clases` VARCHAR (50),
`apoyo_suministrado_por` VARCHAR (50),
`facilitacion_planes_seguro_médico` VARCHAR (50),
`facilitacion_planes_suministrado_por` VARCHAR (50),
`prestación_serv_atención_primaria` VARCHAR (50),
`prestación_serv_suministrado_por` VARCHAR (50),
`referencia_serv_atención_medica_primaria` VARCHAR (50),
`referencia_serv_suministrado_por` VARCHAR (50),
`notas_sobre_serv` VARCHAR (350),
 PRIMARY KEY (`id`))
ENGINE = InnoDB


/**/
SELECT DISTINCT(f1.parentesco),(SELECT COUNT(f2.ocupacion) from familiares f2 WHERE f2.parentesco=f1.parentesco and LENGTH(f2.ocupacion)-LENGTH(REPLACE(f2.ocupacion, '|', '')) = 1) ocupacion1,(SELECT COUNT(f2.ocupacion) from familiares f2 WHERE f2.parentesco=f1.parentesco and LENGTH(f2.ocupacion)-LENGTH(REPLACE(f2.ocupacion, '|', '')) = 2) ocupacion2, 

(SELECT COUNT(f2.ocupacion) from familiares f2 WHERE f2.parentesco=f1.parentesco and LENGTH(f2.ocupacion)-LENGTH(REPLACE(f2.ocupacion, '|', '')) = 3) ocupacion3 FROM familiares  f1



/** * * * * * * * * **/
CREATE TABLE IF NOT EXISTS `manitos`.`modelo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_cim` VARCHAR(50) NOT NULL,
  `institucional_1` VARCHAR(3) NULL,
  `institucional_2` VARCHAR(3) NULL,
  `institucional_3` VARCHAR(3) NULL,
  `institucional_4` VARCHAR(3) NULL,
  `institucional_5` VARCHAR(3) NULL,
  `institucional_6` VARCHAR(3) NULL,
  `institucional_7` VARCHAR(3) NULL,
  `institucional_8` VARCHAR(3) NULL,
  `institucional_9` VARCHAR(3) NULL,
  `institucional_10` VARCHAR(3) NULL,
  `institucional_11` VARCHAR(3) NULL,
  `pedagogico_1` VARCHAR(3) NULL,
  `pedagogico_2` VARCHAR(3) NULL,
  `pedagogico_3` VARCHAR(3) NULL,
  `pedagogico_4` VARCHAR(3) NULL,
  `pedagogico_5` VARCHAR(3) NULL,
  `pedagogico_6` VARCHAR(3) NULL,
  `pedagogico_7` VARCHAR(3) NULL,
  `pedagogico_8` VARCHAR(3) NULL,
  `pedagogico_9` VARCHAR(3) NULL,
  `pedagogico_10` VARCHAR(3) NULL,
  `pedagogico_11` VARCHAR(3) NULL,
  `pedagogico_12` VARCHAR(3) NULL,
  `pedagogico_13` VARCHAR(3) NULL,
  `pedagogico_14` VARCHAR(3) NULL,
  `comunidad_1` VARCHAR(3) NULL,
  `comunidad_2` VARCHAR(3) NULL,
  `comunidad_3` VARCHAR(3) NULL,
  `comunidad_4` VARCHAR(3) NULL,
  `comunidad_5` VARCHAR(3) NULL,
  `comunidad_6` VARCHAR(3) NULL,
  `comunidad_7` VARCHAR(3) NULL,
  `comunidad_8` VARCHAR(3) NULL,
  `comunidad_9` VARCHAR(3) NULL,
  `total_institucional` VARCHAR(5) NULL,
  `total_pedagogico` VARCHAR(5) NULL,
  `total_comunidad` VARCHAR(5) NULL,
  INDEX `fk_modelo_cim2_idx` (`id_cim` ASC),
  CONSTRAINT `fk_modelo_cim2`
    FOREIGN KEY (`id_cim`)
    REFERENCES `manitos`.`cim` (`id_cim`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB



CREATE TABLE IF NOT EXISTS `manitos`.`modelo` (
    `id` INT NOT NULL AUTO_INCREMENT,
  `id_cim` VARCHAR(50) NOT NULL,
  `institucional_1` VARCHAR(3) NULL,
  `institucional_2` VARCHAR(3) NULL,
  `institucional_3` VARCHAR(3) NULL,
  `institucional_4` VARCHAR(3) NULL,
  `institucional_5` VARCHAR(3) NULL,
  `institucional_6` VARCHAR(3) NULL,
  `institucional_7` VARCHAR(3) NULL,
  `institucional_8` VARCHAR(3) NULL,
  `institucional_9` VARCHAR(3) NULL,
  `institucional_10` VARCHAR(3) NULL,
  `institucional_11` VARCHAR(3) NULL,
  `pedagogico_1` VARCHAR(3) NULL,
  `pedagogico_2` VARCHAR(3) NULL,
  `pedagogico_3` VARCHAR(3) NULL,
  `pedagogico_4` VARCHAR(3) NULL,
  `pedagogico_5` VARCHAR(3) NULL,
  `pedagogico_6` VARCHAR(3) NULL,
  `pedagogico_7` VARCHAR(3) NULL,
  `pedagogico_8` VARCHAR(3) NULL,
  `pedagogico_9` VARCHAR(3) NULL,
  `pedagogico_10` VARCHAR(3) NULL,
  `pedagogico_11` VARCHAR(3) NULL,
  `pedagogico_12` VARCHAR(3) NULL,
  `pedagogico_13` VARCHAR(3) NULL,
  `pedagogico_14` VARCHAR(3) NULL,
  `comunidad_1` VARCHAR(3) NULL,
  `comunidad_2` VARCHAR(3) NULL,
  `comunidad_3` VARCHAR(3) NULL,
  `comunidad_4` VARCHAR(3) NULL,
  `comunidad_5` VARCHAR(3) NULL,
  `comunidad_6` VARCHAR(3) NULL,
  `comunidad_7` VARCHAR(3) NULL,
  `comunidad_8` VARCHAR(3) NULL,
  `comunidad_9` VARCHAR(3) NULL,
  `total_institucional` VARCHAR(5) NULL,
  `total_pedagogico` VARCHAR(5) NULL,
  `total_comunidad` VARCHAR(5) NULL,
  INDEX `fk_modelo_cim2_idx` (`id_cim` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_modelo_cim2`
    FOREIGN KEY (`id_cim`)
    REFERENCES `manitos`.`cim` (`id_cim`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB

SELECT DISTINCT(c.nombre ),
(SELECT COUNT(tipo_seguro_salud) FROM datosnino as dn2 where  dn2.id_cim=c.id_cim and tipo_seguro_salud LIKE '%SUMI%' and tipo_seguro_salud!='') Publico,

(SELECT COUNT(tipo_seguro_salud) FROM datosnino as dn2 where  dn2.id_cim=c.id_cim and tipo_seguro_salud  NOT LIKE '%SUMI%' and tipo_seguro_salud is not null and tipo_seguro_salud!='')
+
(SELECT COUNT(tipo_seguro_salud) FROM datosnino as dn2 where  dn2.id_cim=c.id_cim and otro_tipo_seguro_salud!='' and otro_tipo_seguro_salud is not null)Privado,

(SELECT Publico)+(SELECT Privado) Total 

FROM datosnino as dn RIGHT join cim as c on (dn.id_cim=c.id_cim)



SELECT DISTINCT (c.nombre),
(SELECT COUNT(mot_gruesa) FROM escala as e where  e.mot_gruesa='SUMI' and tipo_seguro_salud!='') Publico,



anios
meses
mot_gruesa
mot_fina
aud_leng
per_soc
total_actual
periodo


SELECT mot_gruesa, mot_fina, aud_leng, per_soc, total_actual ,periodo FROM escala  




INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Donacion Iglesia', 'Frazadas', '5', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Aportes PPFF', 'mesas', '2', 'Regular', NULL);
INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Aportes PPFF', 'Television', '8', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Aportes PPFF', 'Cocina', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Aportes PPFF', 'Garrafa', '2', 'Bueno', NULL);

INSERT INTO `activos` VALUES (NULL, '102', 'sala y', NULL, 's/c', 'Aportes PPFF', 'Frazadas', '5', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '103', 'sala z', NULL, 's/c', 'Aportes PPFF', 'Pizarra', '2', 'Regular', NULL);
INSERT INTO `activos` VALUES (NULL, '103', 'sala z', NULL, 's/c', 'Donacion Iglesia', 'Escritorio', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '103', 'sala z', NULL, 's/c', 'Aportes PPFF', 'Cocina', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '103', 'sala z', NULL, 's/c', 'Children', 'equipo de sonido', '2', 'Bueno', NULL);

INSERT INTO `activos` VALUES (NULL, '104', 'sala y', NULL, 's/c', 'Children', 'colchones', '2', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '104', 'sala z', NULL, 's/c', 'Children', 'Camas', '2', 'Regular', NULL);
INSERT INTO `activos` VALUES (NULL, '104', 'sala z', NULL, 's/c', 'Donacion Iglesia', 'Escritorio', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '104', 'sala z', NULL, 's/c', 'Aportes PPFF', 'Television', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '104', 'sala z', NULL, 's/c', 'Children', 'DVD', '2', 'Bueno', NULL);

INSERT INTO `activos` VALUES (NULL, '105', 'sala y', NULL, 's/c', 'Aportes PPFF', 'Sillas', '12', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '105', 'sala z', NULL, 's/c', 'GAMEA', 'Camas', '2', 'Regular', NULL);
INSERT INTO `activos` VALUES (NULL, '105', 'sala z', NULL, 's/c', 'Donacion Iglesia', 'Mesas', '2', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '105', 'sala z', NULL, 's/c', 'Donacion Iglesia', 'Equipo de sonodo', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '105', 'sala z', NULL, 's/c', 'Aportes PPFF', 'frazadas', '5', 'Bueno', NULL);


INSERT INTO `activos` VALUES (NULL, '106', 'sala z', NULL, 's/c', 'GAMEA', 'Radio', '1', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '106', 'sala y', NULL, 's/c', 'Donacion Iglesia', 'Mesas', '2', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '106', 'sala z', NULL, 's/c', 'Aportes PPFF', 'Cunas', '2', 'Regular', NULL);
INSERT INTO `activos` VALUES (NULL, '106', 'sala z', NULL, 's/c', 'GAMEA', 'Sillas', '12', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '106', 'sala z', NULL, 's/c', 'Donacion Iglesia', 'Estantes', '3', 'Bueno', NULL);
INSERT INTO `activos` VALUES (NULL, '106', 'sala z', NULL, 's/c', 'Aportes PPFF', 'frazadas', '5', 'Bueno', NULL);

WHEN 'report5' THEN SET @queryy="SELECT DISTINCT(c.nombre), 

(SELECT COUNT(e2.total_actual)  from datosnino as dn2 LEFT join escala as e2 on (dn2.id_nino=e2.id_nino) where dn2.id_cim=c.id_cim and e2.total_actual LIKE  '%ALERTA%') ALERTA,(SELECT COUNT(e2.total_actual)  from datosnino as dn2 LEFT join escala as e2 on (dn2.id_nino=e2.id_nino) where dn2.id_cim=c.id_cim and e2.total_actual LIKE  '%MB%') MB,(SELECT COUNT(e2.total_actual)  from datosnino as dn2 LEFT join escala as e2 on (dn2.id_nino=e2.id_nino) where dn2.id_cim=c.id_cim and e2.total_actual LIKE  '%MA%') MA,(SELECT COUNT(e2.total_actual)  from datosnino as dn2 LEFT join escala as e2 on (dn2.id_nino=e2.id_nino) where dn2.id_cim=c.id_cim and e2.total_actual LIKE  '%ALTO%') ALTO, SELECT ALTO)+(SELECT MB)+(SELECT MA)+(SELECT ALERTA) total FROM datosnino as dn RIGHT join cim as c on (dn.id_cim=c.id_cim) LEFT JOIN escala e on (dn.id_nino=e.id_nino)where c.id_cim = ? and e.periodo = ?"; 


WHEN 'report6' THEN SET @queryy="select c.nombre, d.paterno, d.materno,d.nombres, e.mot_gruesa,e.mot_fina,e.aud_leng,e.per_soc, e.total_actual from escala e, datosnino d, cim c WHERE e.id_nino= d.id_nino AND d.id_cim=c.id_cim AND c.id_cim = ? and e.periodo = ?";

SELECT DISTINCT (c.nombre), 

(SELECT COUNT(n.peso_talla)  from datosnino as dn2 LEFT join nutricion as n on (dn2.id_nino=n.id_nino) where dn2.id_cim=c.id_cim and n.peso_talla='OB' and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())>= 6 and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())<=11 ) OB_6M, 

(SELECT COUNT(n.peso_talla)  from datosnino as dn2 LEFT join nutricion as n on (dn2.id_nino=n.id_nino) where dn2.id_cim=c.id_cim and n.peso_talla='SOB' and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())>= 6 and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())<=11 ) SOB_6M, 

(SELECT COUNT(n.peso_talla)  from datosnino as dn2 RIGHT join nutricion as n on (dn2.id_nino=n.id_nino) where dn2.id_cim=c.id_cim and n.peso_talla='NT' and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())>= 6 and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())<=11 ) NT_6M, 

(SELECT COUNT(n.peso_talla)  from datosnino as dn2 LEFT join nutricion as n on (dn2.id_nino=n.id_nino) where dn2.id_cim=c.id_cim and n.peso_talla='DAL' and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())>= 6 and TIMESTAMPDIFF(month, dn2.fecha_nacimiento,CURDATE())<=11 ) DAL_6M, 


(SELECT COUNT(n.talla_edad)  from datosnino as dn2 LEFT join nutricion as n on (dn2.id_nino=n.id_nino) where dn2.id_cim=c.id_cim and n.talla_edad='TA' and TIMESTAMPDIFF(YEAR, dn2.fecha_nacimiento,CURDATE())= 6) TA_6A 

FROM datosnino as dn RIGHT join cim as c on (dn.id_cim=c.id_cim) LEFT JOIN nutricion n2 on (dn.id_nino=n2.id_nino) WHERE c.id_cim=? AND n2.periodo=?";




SELECT n.anios, n.meses,n.peso_talla,n.talla_edad
FROM datosnino d, cim c,nutricion n
where d.id_cim=c.id_cim
and d.id_nino=n.id_nino and c.id_cim='123' AND n.periodo='2016-junio'
order by n.anios, n.meses ASC;
