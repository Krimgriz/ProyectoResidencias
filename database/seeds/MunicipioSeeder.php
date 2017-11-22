<?php

use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_municipio')->insert([
			['id' =>213,'nombre' => 'SIN INFORMACION','idEstado' =>33],
			['id' =>1,'nombre' => 'ACAJETE','idEstado' =>30],
			['id' =>2,'nombre' => 'ACATLÁN','idEstado' =>30],
			['id' =>3,'nombre' => 'ACAYUCAN','idEstado' =>30],
			['id' =>4,'nombre' => 'ACTOPAN','idEstado' =>30],
			['id' =>5,'nombre' => 'ACULA','idEstado' =>30],
			['id' =>6,'nombre' => 'ACULTZINGO','idEstado' =>30],
			['id' =>7,'nombre' => 'CAMARÓN DE TEJEDA','idEstado' =>30],
			['id' =>8,'nombre' => 'ALPATLÁHUAC','idEstado' =>30],
			['id' =>9,'nombre' => 'ALTO LUCERO DE GUTIÉRREZ BARRIOS','idEstado' =>30],
			['id' =>10,'nombre' => 'ALTOTONGA','idEstado' =>30],
			['id' =>11,'nombre' => 'ALVARADO','idEstado' =>30],
			['id' =>12,'nombre' => 'AMATITLÁN','idEstado' =>30],
			['id' =>13,'nombre' => 'NARANJOS AMATLÁN','idEstado' =>30],
			['id' =>14,'nombre' => 'AMATLÁN DE LOS REYES','idEstado' =>30],
			['id' =>15,'nombre' => 'ANGEL R. CABADA','idEstado' =>30],
			['id' =>16,'nombre' => 'LA ANTIGUA','idEstado' =>30],
			['id' =>17,'nombre' => 'APAZAPAN','idEstado' =>30],
			['id' =>18,'nombre' => 'AQUILA','idEstado' =>30],
			['id' =>19,'nombre' => 'ASTACINGA','idEstado' =>30],
			['id' =>20,'nombre' => 'ATLAHUILCO','idEstado' =>30],
			['id' =>21,'nombre' => 'ATOYAC','idEstado' =>30],
			['id' =>22,'nombre' => 'ATZACAN','idEstado' =>30],
			['id' =>23,'nombre' => 'ATZALAN','idEstado' =>30],
			['id' =>24,'nombre' => 'TLALTETELA','idEstado' =>30],
			['id' =>25,'nombre' => 'AYAHUALULCO','idEstado' =>30],
			['id' =>26,'nombre' => 'BANDERILLA','idEstado' =>30],
			['id' =>27,'nombre' => 'BENITO JUÁREZ','idEstado' =>30],
			['id' =>28,'nombre' => 'BOCA DEL RÍO','idEstado' =>30],
			['id' =>29,'nombre' => 'CALCAHUALCO','idEstado' =>30],
			['id' =>30,'nombre' => 'CAMERINO Z. MENDOZA','idEstado' =>30],
			['id' =>31,'nombre' => 'CARRILLO PUERTO','idEstado' =>30],
			['id' =>32,'nombre' => 'CATEMACO','idEstado' =>30],
			['id' =>33,'nombre' => 'CAZONES DE HERRERA','idEstado' =>30],
			['id' =>34,'nombre' => 'CERRO AZUL','idEstado' =>30],
			['id' =>35,'nombre' => 'CITLALTÉPETL','idEstado' =>30],
			['id' =>36,'nombre' => 'COACOATZINTLA','idEstado' =>30],
			['id' =>37,'nombre' => 'COAHUITLÁN','idEstado' =>30],
			['id' =>38,'nombre' => 'COATEPEC','idEstado' =>30],
			['id' =>39,'nombre' => 'COATZACOALCOS','idEstado' =>30],
			['id' =>40,'nombre' => 'COATZINTLA','idEstado' =>30],
			['id' =>41,'nombre' => 'COETZALA','idEstado' =>30],
			['id' =>42,'nombre' => 'COLIPA','idEstado' =>30],
			['id' =>43,'nombre' => 'COMAPA','idEstado' =>30],
			['id' =>44,'nombre' => 'CÓRDOBA','idEstado' =>30],
			['id' =>45,'nombre' => 'COSAMALOAPAN DE CARPIO','idEstado' =>30],
			['id' =>46,'nombre' => 'COSAUTLÁN DE CARVAJAL','idEstado' =>30],
			['id' =>47,'nombre' => 'COSCOMATEPEC','idEstado' =>30],
			['id' =>48,'nombre' => 'COSOLEACAQUE','idEstado' =>30],
			['id' =>49,'nombre' => 'COTAXTLA','idEstado' =>30],
			['id' =>50,'nombre' => 'COXQUIHUI','idEstado' =>30],
			['id' =>51,'nombre' => 'COYUTLA','idEstado' =>30],
			['id' =>52,'nombre' => 'CUICHAPA','idEstado' =>30],
			['id' =>53,'nombre' => 'CUITLÁHUAC','idEstado' =>30],
			['id' =>54,'nombre' => 'CHACALTIANGUIS','idEstado' =>30],
			['id' =>55,'nombre' => 'CHALMA','idEstado' =>30],
			['id' =>56,'nombre' => 'CHICONAMEL','idEstado' =>30],
			['id' =>57,'nombre' => 'CHICONQUIACO','idEstado' =>30],
			['id' =>58,'nombre' => 'CHICONTEPEC','idEstado' =>30],
			['id' =>59,'nombre' => 'CHINAMECA','idEstado' =>30],
			['id' =>60,'nombre' => 'CHINAMPA DE GOROSTIZA','idEstado' =>30],
			['id' =>61,'nombre' => 'LAS CHOAPAS','idEstado' =>30],
			['id' =>62,'nombre' => 'CHOCAMÁN','idEstado' =>30],
			['id' =>63,'nombre' => 'CHONTLA','idEstado' =>30],
			['id' =>64,'nombre' => 'CHUMATLÁN','idEstado' =>30],
			['id' =>65,'nombre' => 'EMILIANO ZAPATA','idEstado' =>30],
			['id' =>66,'nombre' => 'ESPINAL','idEstado' =>30],
			['id' =>67,'nombre' => 'FILOMENO MATA','idEstado' =>30],
			['id' =>68,'nombre' => 'FORTÍN','idEstado' =>30],
			['id' =>69,'nombre' => 'GUTIÉRREZ ZAMORA','idEstado' =>30],
			['id' =>70,'nombre' => 'HIDALGOTITLÁN','idEstado' =>30],
			['id' =>71,'nombre' => 'HUATUSCO','idEstado' =>30],
			['id' =>72,'nombre' => 'HUAYACOCOTLA','idEstado' =>30],
			['id' =>73,'nombre' => 'HUEYAPAN DE OCAMPO','idEstado' =>30],
			['id' =>74,'nombre' => 'HUILOAPAN DE CUAUHTÉMOC','idEstado' =>30],
			['id' =>75,'nombre' => 'IGNACIO DE LA LLAVE','idEstado' =>30],
			['id' =>76,'nombre' => 'ILAMATLÁN','idEstado' =>30],
			['id' =>77,'nombre' => 'ISLA','idEstado' =>30],
			['id' =>78,'nombre' => 'IXCATEPEC','idEstado' =>30],
			['id' =>79,'nombre' => 'IXHUACÁN DE LOS REYES','idEstado' =>30],
			['id' =>80,'nombre' => 'IXHUATLÁN DEL CAFÉ','idEstado' =>30],
			['id' =>81,'nombre' => 'IXHUATLANCILLO','idEstado' =>30],
			['id' =>82,'nombre' => 'IXHUATLÁN DEL SURESTE','idEstado' =>30],
			['id' =>83,'nombre' => 'IXHUATLÁN DE MADERO','idEstado' =>30],
			['id' =>84,'nombre' => 'IXMATLAHUACAN','idEstado' =>30],
			['id' =>85,'nombre' => 'IXTACZOQUITLÁN','idEstado' =>30],
			['id' =>86,'nombre' => 'JALACINGO','idEstado' =>30],
			['id' =>87,'nombre' => 'XALAPA','idEstado' =>30],
			['id' =>88,'nombre' => 'JALCOMULCO','idEstado' =>30],
			['id' =>89,'nombre' => 'JÁLTIPAN','idEstado' =>30],
			['id' =>90,'nombre' => 'JAMAPA','idEstado' =>30],
			['id' =>91,'nombre' => 'JESÚS CARRANZA','idEstado' =>30],
			['id' =>92,'nombre' => 'XICO','idEstado' =>30],
			['id' =>93,'nombre' => 'JILOTEPEC','idEstado' =>30],
			['id' =>94,'nombre' => 'JUAN RODRÍGUEZ CLARA','idEstado' =>30],
			['id' =>95,'nombre' => 'JUCHIQUE DE FERRER','idEstado' =>30],
			['id' =>96,'nombre' => 'LANDERO Y COSS','idEstado' =>30],
			['id' =>97,'nombre' => 'LERDO DE TEJADA','idEstado' =>30],
			['id' =>98,'nombre' => 'MAGDALENA','idEstado' =>30],
			['id' =>99,'nombre' => 'MALTRATA','idEstado' =>30],
			['id' =>100,'nombre' => 'MANLIO FABIO ALTAMIRANO','idEstado' =>30],
			['id' =>101,'nombre' => 'MARIANO ESCOBEDO','idEstado' =>30],
			['id' =>102,'nombre' => 'MARTÍNEZ DE LA TORRE','idEstado' =>30],
			['id' =>103,'nombre' => 'MECATLÁN','idEstado' =>30],
			['id' =>104,'nombre' => 'MECAYAPAN','idEstado' =>30],
			['id' =>105,'nombre' => 'MEDELLÍN DE BRAVO','idEstado' =>30],
			['id' =>106,'nombre' => 'MIAHUATLÁN','idEstado' =>30],
			['id' =>107,'nombre' => 'LAS MINAS','idEstado' =>30],
			['id' =>108,'nombre' => 'MINATITLÁN','idEstado' =>30],
			['id' =>109,'nombre' => 'MISANTLA','idEstado' =>30],
			['id' =>110,'nombre' => 'MIXTLA DE ALTAMIRANO','idEstado' =>30],
			['id' =>111,'nombre' => 'MOLOACÁN','idEstado' =>30],
			['id' =>112,'nombre' => 'NAOLINCO','idEstado' =>30],
			['id' =>113,'nombre' => 'NARANJAL','idEstado' =>30],
			['id' =>114,'nombre' => 'NAUTLA','idEstado' =>30],
			['id' =>115,'nombre' => 'NOGALES','idEstado' =>30],
			['id' =>116,'nombre' => 'OLUTA','idEstado' =>30],
			['id' =>117,'nombre' => 'OMEALCA','idEstado' =>30],
			['id' =>118,'nombre' => 'ORIZABA','idEstado' =>30],
			['id' =>119,'nombre' => 'OTATITLÁN','idEstado' =>30],
			['id' =>120,'nombre' => 'OTEAPAN','idEstado' =>30],
			['id' =>121,'nombre' => 'OZULUAMA DE MASCAREÑAS','idEstado' =>30],
			['id' =>122,'nombre' => 'PAJAPAN','idEstado' =>30],
			['id' =>123,'nombre' => 'PÁNUCO','idEstado' =>30],
			['id' =>124,'nombre' => 'PAPANTLA','idEstado' =>30],
			['id' =>125,'nombre' => 'PASO DEL MACHO','idEstado' =>30],
			['id' =>126,'nombre' => 'PASO DE OVEJAS','idEstado' =>30],
			['id' =>127,'nombre' => 'LA PERLA','idEstado' =>30],
			['id' =>128,'nombre' => 'PEROTE','idEstado' =>30],
			['id' =>129,'nombre' => 'PLATÓN SÁNCHEZ','idEstado' =>30],
			['id' =>130,'nombre' => 'PLAYA VICENTE','idEstado' =>30],
			['id' =>131,'nombre' => 'POZA RICA DE HIDALGO','idEstado' =>30],
			['id' =>132,'nombre' => 'LAS VIGAS DE RAMÍREZ','idEstado' =>30],
			['id' =>133,'nombre' => 'PUEBLO VIEJO','idEstado' =>30],
			['id' =>134,'nombre' => 'PUENTE NACIONAL','idEstado' =>30],
			['id' =>135,'nombre' => 'RAFAEL DELGADO','idEstado' =>30],
			['id' =>136,'nombre' => 'RAFAEL LUCIO','idEstado' =>30],
			['id' =>137,'nombre' => 'LOS REYES','idEstado' =>30],
			['id' =>138,'nombre' => 'RÍO BLANCO','idEstado' =>30],
			['id' =>139,'nombre' => 'SALTABARRANCA','idEstado' =>30],
			['id' =>140,'nombre' => 'SAN ANDRÉS TENEJAPAN','idEstado' =>30],
			['id' =>141,'nombre' => 'SAN ANDRÉS TUXTLA','idEstado' =>30],
			['id' =>142,'nombre' => 'SAN JUAN EVANGELISTA','idEstado' =>30],
			['id' =>143,'nombre' => 'SANTIAGO TUXTLA','idEstado' =>30],
			['id' =>144,'nombre' => 'SAYULA DE ALEMÁN','idEstado' =>30],
			['id' =>145,'nombre' => 'SOCONUSCO','idEstado' =>30],
			['id' =>146,'nombre' => 'SOCHIAPA','idEstado' =>30],
			['id' =>147,'nombre' => 'SOLEDAD ATZOMPA','idEstado' =>30],
			['id' =>148,'nombre' => 'SOLEDAD DE DOBLADO','idEstado' =>30],
			['id' =>149,'nombre' => 'SOTEAPAN','idEstado' =>30],
			['id' =>150,'nombre' => 'TAMALÍN','idEstado' =>30],
			['id' =>151,'nombre' => 'TAMIAHUA','idEstado' =>30],
			['id' =>152,'nombre' => 'TAMPICO ALTO','idEstado' =>30],
			['id' =>153,'nombre' => 'TANCOCO','idEstado' =>30],
			['id' =>154,'nombre' => 'TANTIMA','idEstado' =>30],
			['id' =>155,'nombre' => 'TANTOYUCA','idEstado' =>30],
			['id' =>156,'nombre' => 'TATATILA','idEstado' =>30],
			['id' =>157,'nombre' => 'CASTILLO DE TEAYO','idEstado' =>30],
			['id' =>158,'nombre' => 'TECOLUTLA','idEstado' =>30],
			['id' =>159,'nombre' => 'TEHUIPANGO','idEstado' =>30],
			['id' =>160,'nombre' => 'ÁLAMO TEMAPACHE','idEstado' =>30],
			['id' =>161,'nombre' => 'TEMPOAL','idEstado' =>30],
			['id' =>162,'nombre' => 'TENAMPA','idEstado' =>30],
			['id' =>163,'nombre' => 'TENOCHTITLÁN','idEstado' =>30],
			['id' =>164,'nombre' => 'TEOCELO','idEstado' =>30],
			['id' =>165,'nombre' => 'TEPATLAXCO','idEstado' =>30],
			['id' =>166,'nombre' => 'TEPETLÁN','idEstado' =>30],
			['id' =>167,'nombre' => 'TEPETZINTLA','idEstado' =>30],
			['id' =>168,'nombre' => 'TEQUILA','idEstado' =>30],
			['id' =>169,'nombre' => 'JOSÉ AZUETA','idEstado' =>30],
			['id' =>170,'nombre' => 'TEXCATEPEC','idEstado' =>30],
			['id' =>171,'nombre' => 'TEXHUACÁN','idEstado' =>30],
			['id' =>172,'nombre' => 'TEXISTEPEC','idEstado' =>30],
			['id' =>173,'nombre' => 'TEZONAPA','idEstado' =>30],
			['id' =>174,'nombre' => 'TIERRA BLANCA','idEstado' =>30],
			['id' =>175,'nombre' => 'TIHUATLÁN','idEstado' =>30],
			['id' =>176,'nombre' => 'TLACOJALPAN','idEstado' =>30],
			['id' =>177,'nombre' => 'TLACOLULAN','idEstado' =>30],
			['id' =>178,'nombre' => 'TLACOTALPAN','idEstado' =>30],
			['id' =>179,'nombre' => 'TLACOTEPEC DE MEJÍA','idEstado' =>30],
			['id' =>180,'nombre' => 'TLACHICHILCO','idEstado' =>30],
			['id' =>181,'nombre' => 'TLALIXCOYAN','idEstado' =>30],
			['id' =>182,'nombre' => 'TLALNELHUAYOCAN','idEstado' =>30],
			['id' =>183,'nombre' => 'TLAPACOYAN','idEstado' =>30],
			['id' =>184,'nombre' => 'TLAQUILPA','idEstado' =>30],
			['id' =>185,'nombre' => 'TLILAPAN','idEstado' =>30],
			['id' =>186,'nombre' => 'TOMATLÁN','idEstado' =>30],
			['id' =>187,'nombre' => 'TONAYÁN','idEstado' =>30],
			['id' =>188,'nombre' => 'TOTUTLA','idEstado' =>30],
			['id' =>189,'nombre' => 'TUXPAN','idEstado' =>30],
			['id' =>190,'nombre' => 'TUXTILLA','idEstado' =>30],
			['id' =>191,'nombre' => 'URSULO GALVÁN','idEstado' =>30],
			['id' =>192,'nombre' => 'VEGA DE ALATORRE','idEstado' =>30],
			['id' =>193,'nombre' => 'VERACRUZ','idEstado' =>30],
			['id' =>194,'nombre' => 'VILLA ALDAMA','idEstado' =>30],
			['id' =>195,'nombre' => 'XOXOCOTLA','idEstado' =>30],
			['id' =>196,'nombre' => 'YANGA','idEstado' =>30],
			['id' =>197,'nombre' => 'YECUATLA','idEstado' =>30],
			['id' =>198,'nombre' => 'ZACUALPAN','idEstado' =>30],
			['id' =>199,'nombre' => 'ZARAGOZA','idEstado' =>30],
			['id' =>200,'nombre' => 'ZENTLA','idEstado' =>30],
			['id' =>201,'nombre' => 'ZONGOLICA','idEstado' =>30],
			['id' =>202,'nombre' => 'ZONTECOMATLÁN DE LÓPEZ Y FUENTES','idEstado' =>30],
			['id' =>203,'nombre' => 'ZOZOCOLCO DE HIDALGO','idEstado' =>30],
			['id' =>204,'nombre' => 'AGUA DULCE','idEstado' =>30],
			['id' =>205,'nombre' => 'EL HIGO','idEstado' =>30],
			['id' =>206,'nombre' => 'NANCHITAL DE LÁZARO CÁRDENAS DEL RÍO','idEstado' =>30],
			['id' =>207,'nombre' => 'TRES VALLES','idEstado' =>30],
			['id' =>208,'nombre' => 'CARLOS A. CARRILLO','idEstado' =>30],
			['id' =>209,'nombre' => 'TATAHUICAPAN DE JUÁREZ','idEstado' =>30],
			['id' =>210,'nombre' => 'UXPANAPA','idEstado' =>30],
			['id' =>211,'nombre' => 'SAN RAFAEL','idEstado' =>30],
			['id' =>212,'nombre' => 'SANTIAGO SOCHIAPAN','idEstado' =>30]
        ]);
    }
}