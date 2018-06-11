jQuery(document).ready(function ($) {
	/* * * * * * * * * * * * VALIDATIONS * * * * * * * *  * * * * * **/

	function eval_desarrollo(edad_meses, that, type){
		//console.log( that.attr('id') ); 
		var valor = parseInt(that.val());
		that.parents('td').siblings('td.literal').removeClass('ale mb ma al');
		that.parents('td').siblings('td.literal').text('');
		if(type == 'mot-gruesa'){
		/* * * * * * MOTRICIDAD GRUESA * * * * * * */
			/*0 - 3 meses*/
			if((edad_meses>=1 & edad_meses<=3)){
				if( valor >= 0 && valor <= 1  ){/*0-1*/
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 2 && valor <= 3  ){/*2-3*/
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 4 && valor <= 5  ){/*4-5*/
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 6  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*4 - 6 meses*/
			if(edad_meses >=4 & edad_meses <=6){
				if( valor >= 0 && valor <= 4 ){/*0-4*/
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 5 && valor <= 6 ){/*5-6*/
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 7 && valor <= 9 ){/*7-9*/
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 10 ){/*10*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*7-9 meses*/
			if(edad_meses >= 7 & edad_meses <= 9){
				if( valor >= 0 && valor <= 7 ){/*0- 7*/
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 8 && valor <= 10 ){/*8-10*/
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >=  13 && valor <= 11 ){/*11-13*/
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 14 ) {/* >14*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*10-12 meses*/
			if(edad_meses >= 10 & edad_meses <= 12){
				if( valor >= 0 && valor <= 11 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 12 && valor <= 13 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >=  14 && valor <= 16 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 17 ){	
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*13-18 meses*/
			if(edad_meses >= 13 & edad_meses <= 18){
				if( valor >= 0 && valor <= 13 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');;
					return false;
				}
				if( valor >= 14 && valor <= 16 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');;
					return false;
				}
				if( valor >= 17 && valor <= 19 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');;
					return false;
				}
				if( valor >= 20 ) {
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
					return false;
				}
				return false;
			}
			/*19-24 meses*/
			if(edad_meses >= 19 & edad_meses <= 24){
				if( valor >= 0 && valor <= 16 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 17 && valor <= 19 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >=  20 && valor <= 23 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 24 ) {
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*25-36 meses*/
			if(edad_meses >= 25 & edad_meses <= 36){

				if( valor >= 0 && valor <= 19 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 20 && valor <= 23 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >=  24 && valor <= 27 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 28 ) {
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*37-48 meses*/
			if(edad_meses >= 37 & edad_meses <= 48){
				if( valor >= 0 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 23 && valor <= 26 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 27 && valor <= 29 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 30 ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*49-60 meses*/
			if(edad_meses >= 49 & edad_meses <= 60){
				if( valor >= 0 && valor <= 26 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 27 && valor <= 29 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 30 ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*61-72 meses*/
			if(edad_meses >= 61 & edad_meses <= 72){
				if( valor >= 0 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 23 && valor <= 28 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 29 && valor <= 35 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 36 ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*73-84 meses*/
			if(edad_meses >= 73 & edad_meses <= 84){
				if( valor >= 0 && valor <= 25 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 26 && valor <= 32 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 33 && valor <= 36 ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
		}// end if mot-gruesa
		/* * * * * * MOTRICIDAD FINA * * * * * * */
		else if(type == 'mot-fina'){
			/*1 - 3 meses*/
			if(edad_meses>=1 & edad_meses<=3){
				if( valor >= 0 && valor <= 1  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 2 && valor <= 3  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 4 && valor <= 5  ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 6  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*4 - 6 meses*/
			if(edad_meses>=4 & edad_meses<=6){
				if( valor >= 0 && valor <= 4  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 5 && valor <= 6  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 7 && valor <= 9  ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 10  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*7 - 9 meses*/
			if(edad_meses>=7 & edad_meses<=9){
				if( valor >= 0 && valor <= 7  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 8 && valor <= 10  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 11 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 13 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*10 - 12 meses*/
			if(edad_meses>=10 & edad_meses<=12){
				if( valor >= 0 && valor <= 9  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 10 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 13 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 15  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*13 - 18 meses*/
			if(edad_meses>=13 & edad_meses<=18){
				if( valor >= 0 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 13 && valor <= 15 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 16 && valor <= 18 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 19  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*19 - 24 meses*/
			if(edad_meses>=19 & edad_meses<=24){
				if( valor >= 0 && valor <= 14  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 15 && valor <= 18  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 19 && valor <= 20  ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 21  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*25 - 36 meses*/
			if(edad_meses>=25 & edad_meses<=36){
				if( valor >= 0 && valor <= 18  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 19 && valor <= 21 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 22 && valor <= 24 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 25 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*37 - 48 meses*/
			if(edad_meses>=37 & edad_meses<=48){
				if( valor >= 0 && valor <= 21 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 22 && valor <= 24 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 25 && valor <= 28 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 29  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*49 - 60 meses*/
			if(edad_meses>=49 & edad_meses<=60){
				if( valor >= 0 && valor <= 23  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 24 && valor <= 28  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 29){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
			}
			/*61 - 72 meses*/
			if(edad_meses>=61 & edad_meses<=72){
				if( valor >= 0 && valor <= 27 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 28 && valor <= 32 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 33 && valor <= 34 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 35 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*73 - 84 meses*/
			if(edad_meses>=73 & edad_meses<=84){
				if( valor >= 0 && valor <= 30 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 31 && valor <= 33 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 34 && valor <= 36 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 37 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
		}
		else if(type == 'aud-leng'){
			/*1 - 3 meses*/
			if(edad_meses>=1 & edad_meses<=3){
				if( valor >= 0 && valor <= 1 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 2 && valor <= 3 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 4 && valor <= 5 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 6 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*4 - 6 meses*/
			if(edad_meses>=4 & edad_meses<=6){
				if( valor >= 0 && valor <= 4  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 5 && valor <= 6 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 7 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 10 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*7 - 9 meses*/
			if(edad_meses>=7 & edad_meses<=9){
				if( valor >= 0 && valor <= 7 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 8 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 10 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 13 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*10 - 12 meses*/
			if(edad_meses>=10 & edad_meses<=12){
				if( valor >= 0 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 10 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 13 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 15  ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*13 - 18 meses*/
			if(edad_meses>=13 & edad_meses<=18){
				if( valor >= 0 && valor <= 12  ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 13 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 14 && valor <= 17 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 18 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*19 - 24 meses*/
			if(edad_meses>=19 & edad_meses<=24){
				if( valor >= 0 && valor <= 13 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 14 && valor <= 17 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 18 && valor <= 20 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 21 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*25 - 36 meses*/
			if(edad_meses>=25 & edad_meses<=36){
				if( valor >= 0 && valor <= 17 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 18 && valor <= 21 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 22 && valor <= 24 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 25 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*37 - 48 meses*/
			if(edad_meses>=37 & edad_meses<=48){
				if( valor >= 0 && valor <= 21 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 22 && valor <= 25 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 26 && valor <= 29 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 30 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*49 - 60 meses*/
			if(edad_meses>=49 & edad_meses<=60){
				if( valor >= 0 && valor <= 24 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 25 && valor <= 28 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 29 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				
			}
			/*61 - 72 meses*/
			if(edad_meses>=61 & edad_meses<=72){
				if( valor >= 0 && valor <= 23 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 24 && valor <= 30 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 31 && valor <= 33 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 34 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*73 - 84 meses*/
			if(edad_meses>=73 & edad_meses<=84){
				if( valor >= 0 && valor <= 27 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 28 && valor <= 32 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 33 && valor <= 35 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 36 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
		}
		else if(type == 'per-soc'){
			/*1 - 3 meses*/
			if(edad_meses>=1 & edad_meses<=3){
				if( valor >= 0 && valor <= 1 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 2 && valor <= 3 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 4 && valor <= 5 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 6 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*4 - 6 meses*/
			if(edad_meses>=4 & edad_meses<=6){
				if( valor >= 0 && valor <= 4 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 5 && valor <= 6 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 7 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 10 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*7 - 9 meses*/
			if(edad_meses>=7 & edad_meses<=9){
				if( valor >= 0 && valor <= 7 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 8 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 10 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 13 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*10 - 12 meses*/
			if(edad_meses>=10 & edad_meses<=12){
				if( valor >= 0 && valor <= 9 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 10 && valor <= 10 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 13 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 15 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*13 - 18 meses*/
			if(edad_meses>=13 & edad_meses<=18){
				if( valor >= 0 && valor <= 12 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 13 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 15 && valor <= 17 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 18 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*19 - 24 meses*/
			if(edad_meses>=19 & edad_meses<=24){
				if( valor >= 0 && valor <= 14 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 15 && valor <= 17 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 18 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 23 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*25 - 36 meses*/
			if(edad_meses>=25 & edad_meses<=36){
				if( valor >= 0 && valor <= 18 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 19 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 23 && valor <= 27 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 28 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*37 - 48 meses*/
			if(edad_meses>=37 & edad_meses<=48){
				if( valor >= 0 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 23 && valor <= 26 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 27 && valor <= 29 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 30 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*49 - 60 meses*/
			if(edad_meses>=49 & edad_meses<=60){
				if( valor >= 0 && valor <= 25 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 26 && valor <= 28 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 29 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				/*if( valor >= x  ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}*/
			}
			/*61 - 72 meses*/
			if(edad_meses>=61 & edad_meses<=72){
				if( valor >= 0 && valor <= 26 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 27 && valor <= 31 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 32 && valor <= 35 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 36 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*73 - 84 meses*/
			if(edad_meses>=73 & edad_meses<=84){
				if( valor >= 0 && valor <= 28 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 29 && valor <= 33 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 34 && valor <= 36 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				/*if( valor >= x  ){
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}*/
			}
		}
		/* * * * * * * TOTAL ACTUAL */
		else if(type == 'total-actual'){
			/*1 - 3 meses*/
			if(edad_meses>=1 & edad_meses<=3){
				if( valor >= 0 && valor <= 6 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 7 && valor <= 13 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 14 && valor <= 22 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 23 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*4 - 6 meses*/
			if(edad_meses>=4 & edad_meses<=6){
				if( valor >= 0 && valor <= 19 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 20 && valor <= 27 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 28 && valor <= 34 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 35 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*7 - 9 meses*/
			if(edad_meses>=7 & edad_meses<=9){
				if( valor >= 0 && valor <= 31 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 32 && valor <= 39 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 40 && valor <= 48 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 49 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*10 - 12 meses*/
			if(edad_meses>=10 & edad_meses<=12){
				if( valor >= 0 && valor <= 42 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 43 && valor <= 49  ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 50 && valor <= 56 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 57 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*13 - 18 meses*/
			if(edad_meses>=13 & edad_meses<=18){
				if( valor >= 0 && valor <= 51 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 52 && valor <= 60 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 61 && valor <= 69 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 70 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*19 - 24 meses*/
			if(edad_meses>=19 & edad_meses<=24){
				if( valor >= 0 && valor <= 61 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 62 && valor <= 71 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 72 && valor <= 83 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 84 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*25 - 36 meses*/
			if(edad_meses>=25 & edad_meses<=36){
				if( valor >= 0 && valor <= 74 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 75 && valor <= 86 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 87 && valor <= 100 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 101 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*37 - 48 meses*/
			if(edad_meses>=37 & edad_meses<=48){
				if( valor >= 0 && valor <= 89 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 90 && valor <= 100 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 101 && valor <= 114 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 115 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*49 - 60 meses*/
			if(edad_meses>=49 & edad_meses<=60){
				if( valor >= 0 && valor <= 101 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 102 && valor <= 113 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 114 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
			}
			/*61 - 72 meses*/
			if(edad_meses>=61 & edad_meses<=72){
				if( valor >= 0 && valor <= 101 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 102 && valor <= 122 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 123 && valor <= 137 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 138 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
			/*73 - 84 meses*/
			if(edad_meses>=73 & edad_meses<=84){
				if( valor >= 0 && valor <= 116 ){
					that.parents().siblings('td.literal').text('Alerta');
					that.parents().siblings('td.literal').addClass('ale');
				}
				if( valor >= 117 && valor <= 132 ){
					that.parents().siblings('td.literal').text('Medio Bajo');
					that.parents().siblings('td.literal').addClass('mb');
				}
				if( valor >= 133 && valor <= 141 ){
					that.parents().siblings('td.literal').text('Medio Alto');
					that.parents().siblings('td.literal').addClass('ma');
				}
				if( valor >= 142 ){/* >6*/
					that.parents().siblings('td.literal').text('Alto');
					that.parents().siblings('td.literal').addClass('al');
				}
			}
		}
	}
/*	$('#cdc-fecha-conformacion-cdc').datepicker({
    	format: 'yyyy-mm-dd',
		autoclose: true,
		endDate: 'now'
     });*/
	$('#tipo-seguro-salud').change(function() {
		var value = $('#tipo-seguro-salud').val();
		if(value == 'Caja Nacional' || value == 'Seguro Universitario' || value == 'Caja Petrolera' || value == 'Seguro Ganadero' ){
			var valor_tipo_seguro_salud = 50;
		} else if(value == 'Seguro Publico (SUMI)'){
			var valor_tipo_seguro_salud = 100;
		} else if(value == 'Otro'){
			var valor_tipo_seguro_salud = 50;
		}
		$('#valor-tipo-seguro-salud').val(valor_tipo_seguro_salud);
	});

	$('#carnet-vacunas').change(function(event) {
		var value = $('#carnet-vacunas').val();
		if(value == 'Si'){
			var valor_carnet_vacunas = 50;
		} else if(value == 'No'){
			var valor_carnet_vacunas = 100;
		}
		$('#valor-carnet-vacunas').val(valor_carnet_vacunas);
	});

	$('#vacunacion-completa').change(function(event) {
		var value = $('#vacunacion-completa').val();
		if (value == 'Si') {
			var valor_vacunacion_completa = 50;
		} else if(value == 'No') {
			var valor_vacunacion_completa = 100;
		}
		$('#valor-vacunacion-completa').val(valor_vacunacion_completa);
	});

	$('#tipo-discapacidad').change(function(event) {
		var value = $('#tipo-discapacidad').val();
		if (value == 'Si') {
			var valor_tipo_discapacidad = 100;
			$("#discapacidad").removeAttr('disabled');
		} else if(value == 'No') {
			var valor_tipo_discapacidad = 50;
			$("#discapacidad").attr('disabled', 'disabled');
		}
		$('#valor-tipo-discapacidad').val(valor_tipo_discapacidad);
	});

	$('#tipo-discapacidad').change(function(event) {
		var value = $('#tipo-discapacidad').val();
		if (value == 'Si') {
			var valor_tipo_discapacidad = 100;
			$("#discapacidad").removeAttr('disabled');
		} else if(value == 'No') {
			var valor_tipo_discapacidad = 50;
			$("#discapacidad").attr('disabled', 'disabled');
		}
		$('#valor-tipo-discapacidad').val(valor_tipo_discapacidad);
	});
/* * * * * * * * * SIT FAMILIAR* * * * * * * * * * *  **/
	$('#nino-vive-con').change(function(event) {
		var value = $('#nino-vive-con').val();
		if (value == 'Padre' || value == 'Madre') {
			var valor_nino_vive_con = 80;
			$("#nino-vive-con-otro").attr('disabled', 'disabled');
		} else if(value == 'Ambos') {
			var valor_nino_vive_con = 50;
			$("#nino-vive-con-otro").attr('disabled', 'disabled');
		} else if(value == 'Hermano_a' || value == 'Abuelos' || value == 'Tios' ){
			var valor_nino_vive_con = 100;
			$("#nino-vive-con-otro").attr('disabled', 'disabled');
		} else if( value == 'Otro'){
			var valor_nino_vive_con = 100;
			$("#nino-vive-con-otro").removeAttr('disabled');
		}

		$('#valor-nino-vive-con').val(valor_nino_vive_con);
	});

	$('#ausencia-madre').change(function(event) {
		var value = $('#ausencia-madre').val();
		if (value == 'Trabajo' || value == 'Estudio' || value == 'Trabaja en otra ciudad' || value == 'Trabaja en el extranjero' ) {
			var valor_ausencia_madre = 100;
			$("#ausencia-madre-otro").attr('disabled', 'disabled');
		} else if(value == 'Otro') {
			var valor_ausencia_madre = 100;
			$("#ausencia-madre-otro").removeAttr('disabled');
		}
		$('#valor-ausencia-madre').val(valor_ausencia_madre);
	});

	$('#ausencia-padre').change(function(event) {
		var value = $('#ausencia-padre').val();
		if (value == 'Trabajo' || value == 'Estudio' || value == 'Trabaja en otra ciudad' || value == 'Trabaja en el extranjero' ) {
			var valor_ausencia_padre = 100;
			$("#ausencia-padre-otro").attr('disabled', 'disabled');
		} else if(value == 'Otro') {
			var valor_ausencia_padre = 100;
			$("#ausencia-padre-otro").removeAttr('disabled');
		}
		$('#valor-ausencia-padre').val(valor_ausencia_padre);
	});

	$('#ausencia-ambos').change(function(event) {
		var value = $('#ausencia-ambos').val();
		if (value == 'Trabajo' || value == 'Estudio' || value == 'Trabaja en otra ciudad' || value == 'Trabaja en el extranjero' ) {
			var valor_ausencia_ambos = 100;
			$("#ausencia-ambos-otro").attr('disabled', 'disabled');
		} else if(value == 'Otro') {
			var valor_ausencia_ambos = 100;
			$("#ausencia-ambos-otro").removeAttr('disabled');
		}
		$('#valor-ausencia-ambos').val(valor_ausencia_ambos);
	});

	$('#ambiente-familiar').change(function(event) {
		var value = $('#ambiente-familiar').val();
		if (value == 'Armonico') {
			var ambiente_familiar = 50;
		} else if (value == 'Conflictivo') {
			var ambiente_familiar = 100;
		} else if (value == 'Indiferente') {
			var ambiente_familiar = 80;
		}

		$('#valor-ambiente-familiar').val(ambiente_familiar);
	});

	$('#numero-hijos').focusout(function(event) {
		var value = $('#numero-hijos').val();
		if (value > 0 && value < 3) {
			var numero_hijos = 50;
		} else if (value > 2 && value < 5 ) {
			var numero_hijos = 80;
		} else if (value > 4) {
			var numero_hijos = 100;
		} 
		$('#valor-numero-hijos').val(numero_hijos);
	});
	$('#tipo-familia').change(function(event) {
		var value = $('#tipo-familia').val();
		if (value == 'Nuclear') {
			var tipo_familia = 50;
		} else if (value == 'Reconstituida' || value == 'Extendida') {
			var tipo_familia = 80;
		} else if (value == 'Monoparental') {
			var tipo_familia = 100;
		}
		$('#valor-tipo-familia').val(tipo_familia);
	});


/* * * * FAMILIARES VALIDATIONS* * * */
	$('#parentesco').change(function(event) {
		
	});
		$('#edad').focusout	(function(event) {
			var value = $('#edad').val();
			if(value > '11' && value < '27'){
				var valor_edad = 100;
			} else if(value > '26' && value < '37' ){
				var valor_edad = 80;
			} else if(value > '36' ){
				var valor_edad = 50;
			}
			if($('#parentesco').val() == 'Padre' || $('#parentesco').val() == 'Madre'){
				$('#valor-edad').val(valor_edad);
			} else{
				$('#valor-edad').val('')
			}
		});
		$('#grado-instruccion').change(function(event) {
			var value = $('#grado-instruccion').val();
			if(value == 'Sin Educacion' || value == 'Primaria'){
				var valor_grado_instruccion = 100;
			} else if(value == 'Secundaria'){
				var valor_grado_instruccion = 80;
			} else if(value == 'Tecnico' || value == 'Universitario/superior'){
				var valor_grado_instruccion = 50;
			} 
			if($('#parentesco').val() == 'Padre' || $('#parentesco').val() == 'Madre'){
				$('#valor-grado-instruccion').val(valor_grado_instruccion);
			} else{
				$('#valor-grado-instruccion').val('')
			}
		});
		$('#ocupacion').change(function(event) {
			var value = $('#ocupacion').val();
			if (value == 'Permanente') {
				var valor_ocupacion = 50;			
			} else if (value == 'Eventual' || value == 'Desempleado' || value == 'Independiente/informal') {
				var valor_ocupacion = 100;
			} else if (value == 'Independiente/formal') {
				var valor_ocupacion = 80;
			} 
			if($('#parentesco').val() == 'Padre' || $('#parentesco').val() == 'Madre'){
				$('#valor-ocupacion').val(valor_ocupacion);
			} else{
				$('#valor-ocupacion').val('')
			}
		});
		$('#ingresos').focusout(function(event) {
			var val = $('#ingresos').val();
			if(val > '0' || val < '3600'){
				var valor_ingresos = 100;
			} else if(val > '3599' || val < '5000'){
				var valor_ingresos = 80;
			} else if(val > '4599' || val < '7551'){
				var valor_ingresos = 50;
			}
			if($('#parentesco').val() == 'Padre' || $('#parentesco').val() == 'Madre'){
				$('#valor-ingresos').val(valor_ingresos);
			} else{
				$('#valor-ingresos').val('')
			}
		});
	

/* * * * * * * * *  CARACTERISTICAS DE LA VIVIENDA * * * * * * * * * * *  **/
	$('#paredes').change(function(event) {
		var val = $('#paredes').val();
		if(val == 'Ladrillo'){
			var valor_paredes = 50;
		} else if(val == 'Adobe'){
			var valor_paredes = 100;
		} else if(val == 'Piedra'){
			var valor_paredes = 80;
		}
		$('#valor-paredes').val(valor_paredes);
	});

	$('#piso').change(function(event) {
		var val = $('#piso').val();
		if(val == 'Piedra'){
			var valor_piso = 100;
		} else if(val == 'Cemento'){
			var valor_piso = 80;
		} else if(val == 'Machimbre' || val == 'Parquet'){
			var valor_piso = 50;
		}
		$('#valor-piso').val(valor_piso);
	});
	
	$('#tipo-vivienda').change(function(event) {
		var val = $('#tipo-vivienda').val();
		if(val == 'Casa-independiente' || val == 'Departamento'){
			var valor_tipo_vivienda = 50;
		} else if(val == 'Casa-compartida'){
			var valor_tipo_vivienda = 80;
		} else if(val == 'Cuarto-multiple'){
			var valor_tipo_vivienda = 100;
		}
		$('#valor-tipo-vivienda').val(valor_tipo_vivienda);
	});

	$('#vivienda-es').change(function(event) {
		var val = $('#vivienda-es').val();
		if(val == 'Cuidador' || val == 'Propia' || val == 'Cedidia' || val == 'Compartida' ){
			var valor_vivienda_es = 50;
		} else if(val == 'Anticretico'){
			var valor_vivienda_es = 80;
		} else if(val == 'Alquiler'){
			var valor_vivienda_es = 100;
		}
		$('#valor-vivienda-es').val(valor_vivienda_es);
	});

	$('#cocina').change(function(event) {
		var val = $('#cocina').val();
		if(val == 'Si'){
			var valor_cocina = 50;
		} else if(val == 'No'){
			var valor_cocina = 100;
		}
		$('#valor-cocina').val(valor_cocina);
	});
	$('#sala').change(function(event) {
		var val = $('#sala').val();
		if(val == 'Si'){
			var valor_sala = 50;
		} else if(val == 'No'){
			var valor_sala = 100;
		}
		$('#valor-sala').val(valor_sala);
	});
	$('#comedor').change(function(event) {
		var val = $('#comedor').val();
		if(val == 'Si'){
			var valor_comedor = 50;
		} else if(val == 'No'){
			var valor_comedor = 100;
		}
		$('#valor-comedor').val(valor_comedor);
	});
	$('#bano').change(function(event) {
		var val = $('#bano').val();
		if(val == 'Privado'){
			var valor_bano = 50;
		} else if(val == 'Compartido'){
			var valor_bano = 100;
		}
		$('#valor-bano').val(valor_bano);
	});
/* * *  * * * EQUIPAMIENTO* * * * * ** */	

	$('#energia-electrica').change(function(event) {
		var val = $('#energia-electrica').val();
		if(val == 'Si'){
			var valor_energia_electrica = 80;
		} else if(val == 'No'){
			var valor_energia_electrica = 100;
		}
		$('#valor-energia-electrica').val(valor_energia_electrica);
	});
	$('#agua-potable').change(function(event) {
		var val = $('#agua-potable').val();
		if(val == 'Si'){
			var valor_agua_potable = 80;
		} else if(val == 'No'){
			var valor_agua_potable = 100;
		}
		$('#valor-agua-potable').val(valor_agua_potable);
	});
	$('#vertiente').change(function(event) {
		var val = $('#vertiente').val();
		if(val == 'Si'){
			var valor_vertiente = 100;
		} else if(val == 'No'){
			var valor_vertiente = 50;
		}
		$('#valor-vertiente').val(valor_vertiente);
	});
	$('#gas-domiciliario').change(function(event) {
		var val = $('#gas-domiciliario').val();
		if(val == 'Si'){
			var valor_gas_domiciliario = 80;
		} else if(val == 'No'){
			var valor_gas_domiciliario = 100;
		}
		$('#valor-gas-domiciliario').val(valor_gas_domiciliario);
	});
	$('#alcantarillado').change(function(event) {
		var val = $('#alcantarillado').val();
		if(val == 'Si'){
			var valor_alcantarillado = 80;
		} else if(val == 'No'){
			var valor_alcantarillado = 100;
		}
		$('#valor-alcantarillado').val(valor_alcantarillado);
	});
	$('#internet').change(function(event) {
		var val = $('#internet').val();
		if(val == 'Si'){
			var valor_internet = 50;
		} else if(val == 'No'){
			var valor_internet = 100;
		}
		$('#valor-internet').val(valor_internet);
	});
	$('#tv-clave').change(function(event) {
		var val = $('#tv-clave').val();
		if(val == 'Si'){
			var valor_tv_cable = 50;
		} else if(val == 'No'){
			var valor_tv_cable = 100;
		}
		$('#valor-tv-clave').val(valor_tv_cable);
	});
	$('#telefono-fijo').change(function(event) {
		var val = $('#telefono-fijo').val();
		if(val == 'Si'){
			var valor_telefono_fijo = 50;
		} else if(val == 'No'){
			var valor_telefono_fijo = 100;
		}
		$('#valor-telefono-fijo').val(valor_telefono_fijo);
	});
	$('#telefono-movil').change(function(event) {
		var val = $('#telefono-movil').val();
		if(val == 'Si'){
			var valor_telefono_movil = 50;
		} else if(val == 'No'){
			var valor_telefono_movil = 100;
		}
		$('#valor-telefono-movil').val(valor_telefono_movil);
	});
	$('#vehiculo-propio').change(function(event) {
		var val = $('#vehiculo-propio').val();
		if(val == 'Si'){
			var valor_vehiculo_propio = 50;
			$('#cantidad-vehiculos').removeAttr('disabled');
		} else if(val == 'No'){
			var valor_vehiculo_propio = 100;
			$('#cantidad-vehiculos').attr('disabled', 'disabled');
		}
		$('#valor-vehiculo-propio').val(valor_vehiculo_propio);
	});
	$('#vehiculo-medio-trabajo').change(function(event) {
		var val = $('#vehiculo-medio-trabajo').val();
		if(val == 'Si'){
			var valor_vehiculo_medio_trabajo = 80;
		} else if(val == 'No'){
			var valor_vehiculo_medio_trabajo = 100;
		}
		$('#valor-vehiculo-medio-trabajo').val(valor_vehiculo_medio_trabajo);
	});
/* * * * TRANSPORTE * * * **/
	$('#transporte-trasladarse-cim').change(function(event) {
		var val = $('#transporte-trasladarse-cim').val();
		if(val == 'A-pie'){
			var valor_transporte_traslad_cim = 100;
			$('#transporte-trasladarse-cim-otro').attr('disabled', 'disabled');
		} else if(val == 'Micro-bus'){
			var valor_transporte_traslad_cim = 80;
			$('#transporte-trasladarse-cim-otro').attr('disabled', 'disabled');
		} else if(val == 'Minibus'){
			var valor_transporte_traslad_cim = 50;
			$('#transporte-trasladarse-cim-otro').attr('disabled', 'disabled');
		}else if(val == 'Otro'){
			var valor_transporte_traslad_cim = 50;
			$('#transporte-trasladarse-cim-otro').removeAttr('disabled');
		}
		$('#valor-transporte-trasladarse-cim').val(valor_transporte_traslad_cim);
		//A-pie 100 Micro-bus 50 Minibus Otro 50
	});
/* * * * * * * * ASPECTOS ECONOMICOS * * * * * * */	

$('#cable, #alimentacion, #vivienda_, #luz, #agua, #vestimenta, #panales, #transporte, #telefono_fijo, #telefono_movil, #gas, #educacion, #salud, #cable').focusout(function(event) {
	var total =  parseInt( $('#alimentacion').val() ) + parseInt( $('#vivienda_').val() ) + parseInt( $('#luz').val() ) + parseInt( $('#agua').val() ) + parseInt( $('#vestimenta').val() ) + parseInt( $('#panales').val() ) + parseInt( $('#transporte').val() ) + parseInt( $('#telefono_fijo').val() ) + parseInt( $('#telefono_movil').val() ) + parseInt( $('#gas').val() ) + parseInt( $('#educacion').val() ) + parseInt( $('#salud').val() ) + parseInt( $('#cable').val() ) ; 
	//console.log( parseInt( $('#alimentacion').val())+10 );
	//console.log( $('#alimentacion').val() +21);
	$('#total-gastos').val(parseInt(total));
	//alert( parseInt( $('#alimentacion').val() )+parseInt( $('#cable').val() )  );
});

/* * * * DEUDAS GRUPO FAMILIAR * * * * **/	
	$('#deuda-grupo-familiar').change(function(event) {
		var val = $('#deuda-grupo-familiar').val();
		if(val == 'Si'){
			var valor_deuda_grupo_familiar = 100;
			$('#monto-adeudado').removeAttr('disabled');
			$('#tipo-inversion').removeAttr('disabled');
		} else if(val == 'No'){
			var valor_deuda_grupo_familiar = 50;
			$('#monto-adeudado').attr('disabled', 'disabled');
			$('#tipo-inversion').attr('disabled', 'disabled');
		}
		$('#valor-deuda-grupo-familiar').val(valor_deuda_grupo_familiar);
	});
/* * * * * * * * * * * VALIDATES INPUTS ESCALA * * * * * * * * * * * **/
	$('#tb-escala').find('input[type=number]').on('keyup', function(event, index){//focusout(function(event, index) {

		if( $(this).val() == "" && isNaN( parseInt($(this).val()) ) ){
			$(this).css('box-shadow', '0px 0px 5px 2px red');
		} else {

			if (this.value.length > 3) {
		        this.value = this.value.slice(0,3); 
		    }



			indx = $(this).parents('tr').index();
			$(this).css('box-shadow', 'none');
			var anios = $('input#anios').val();
			var meses = $('input#meses').val();
			edad_meses = (parseInt(anios)*12) + parseInt(meses);

			eval_desarrollo(edad_meses, $(this), $(this).attr('id'));

			var text = $(this).parents().siblings('td.literal').html();
			var send_value = '{"'+$(this).val()+'":"'+text+'"}';

			$(this).parents('td').find('input[type=hidden]').val(send_value);
			
			total(edad_meses, indx);
		}				
	});
	
	/**/		
	function total(edad_meses, indx){
		var ths = $('#tb-escala').find('input#total-actual');
		
		var total = 0;
		$('#table-escala tr').find('input[type=number]:not("#total-actual") ').each(function(){
			total += parseInt( $(this).val() ) || 0;
		});
		$('input#total-actual').val(total);

		eval_desarrollo(edad_meses, ths, ths.attr('id'));

	}
	//});
/*Parametros normativos para la evaluacion de desarrollo de niños menores a 84 meses */

	/*
	PARA INABILITAR LOS TABS DE FAMILIARES
	$('.group4').ready(function() {
		$('div.group4 *').attr('disabled', 'disabled');
	});
*/


/* ** * * * * * * A J A X * * * * * * ** * */	
	$('#frm-sit-fam').submit(function(){
	//alert('ddd');
	var datos = $(this).serialize();
	$.ajax({
		type: "POST",
		url: $(this).attr('action'),
		data: datos,
		beforeSend: function( data )
		{
			$('#loading').removeClass('hidden')                    
		},
		success:  function( data )
		{
			$('#msg-success').removeClass('hidden')
			$('#loading').addClass('hidden')
	//$('#frm-sit-fam *').attr('disabled', 'disabled');
	$('#msg-success').attr('disabled', 'disabled');
	$('div.group4 *').removeAttr('disabled');
	$('#msg-success').fadeOut(4000);
	},
	});
	return false;
	});
	
	$('#frm-fams').submit(function(){
        var datos = $(this).serialize();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: datos,
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#frm-sit-fam *').attr('disabled', 'disabled');
            	$('#msg-success').attr('disabled', 'disabled');
            	$('div.group4 *').removeAttr('disabled');
            	$('#msg-success').fadeOut(4000);
            	$("input[type=text], textarea, select").val('');
            	$('#result').html(data);
            },
        });
        return false;
    });


	$('#frm-cons').submit(function(){
        var datos = $(this).serialize();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: datos,
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#frm-sit-fam *').attr('disabled', 'disabled');
            	$('#msg-success').attr('disabled', 'disabled');
            	$('div.group4 *').removeAttr('disabled');
            	$('#msg-success').fadeOut(4000);
            	$("input[type=text], textarea, select").val('');
            	$('#result-cons').html(data);
            },
        });
        return false;
    });


	checkEscala = function(){
		var check = 0;
		$("#tb tr").each(function (index) {
			var index = index;
            var tag = $(this).find('td div input');
            if(tag[0].value != "" && tag[1].value != "" && tag[2].value != "" && tag[3].value != "" && tag[4].value != "" && tag[5].value != ""){
            	check = check + 1;
            }
	    });
	    tr = $('#tb tr').length;
	    if(tr == check){
	    	return true;
		}else{
	    	return false;
	    }
	}

	$('#submit-escalaX').click(function(event) {
		var data = {Escala: []};  
		$("#tb tr").each(function (index) {
			//var index = index;
            var tag = $(this).find('td div input');
			data.Escala.push( {id_nino: tag[0].value, mot_gruesa: tag[1].value, mot_fina:tag[2].value, aud_leng:tag[3].value, per_soc: tag[4].value, total_actual: tag[5].value }  );
        });
		if(checkEscala()){	
			$.ajax({
				type: "POST",
				url: "CuadroSignosVitales/addEscala",
				data: {data : data}, 
				dataType: "html",
				beforeSend: function(){
					$("#loading").removeClass('hidden');
					$('#msg-box').addClass('hidden')
					//alert-success
					//$("#loading").html("HA OCURRIDO UN ERROR");
				},
				success: function(data){
					$('#msg-box').removeClass('alert-danger hidden');
					$('#loading').addClass('hidden');
					$('#msg-box').html('Guardado correctamente! <br> <b>Contine con Estado nutricional</b>');
					$('#msg-box').addClass('alert-success');

					//.trigger( "click" );
					$('div.group1 *').attr('disabled','disabled');
				}
			});
		} else {
			$('#msg-box-danger').removeClass('hidden');
		}
	});// $('#submit-escala')

	//$('#tb').find('input').focusin(function(event) {}
	/*$('#submit-nutricion').click(function(event) {
		var data = {Nutricion: []};  
		$("#tb-nutricion tr").each(function (index) {
			var index = index;
            var tag = $(this).find('td input:checked').val();
            $(this).find('td')[21].addClass('mb');;
            console.log(tag);
        });
	});*/
	/*$("#home-link").click(function(event) {
		$('div.group4 *').attr('disabled', 'disabled');
	});*/
/* * * * * * *ADD FAMILY * * * * **/
	
	
/* * * * * * HISTORIAL DE GESTIONES PASADAS * * * * * *  **/

	$('#frm-aportes-gastos').submit(function(){
	//$('#gestion').click(function(){
		//alert($(this).val());
		var datos = $(this).serialize()
		$.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: datos,
            beforeSend: function( data )
            {
                $('#loading').removeClass('hidden')                    
            },
            success:  function( data )
            {
                $('#msg-success').removeClass('hidden')
            	$('#loading').addClass('hidden')
            	$('#frm-sit-fam *').attr('disabled', 'disabled');
            	$('#msg-success').attr('disabled', 'disabled');
            	$('div.group4 *').removeAttr('disabled');
            	$('#msg-success').fadeOut(4000);
            	$("input[type=text], textarea, select").val('');
            	$('#aportes-gastos').html(data);
            },
        });
        return false;
	});// $('#gestion')






/*funcion que ayuda al calculo de la edad en funcion al input fecha de nacimiento*/

	fecha_actual = function(mode){
		var d = new Date();
		var mes = d.getMonth()+1;
		var dia = d.getDate();
		var hh = d.getHours();
		var mm = d.getMinutes();
		var ss = d.getSeconds();
		if(mode == 'onlyDate'){
			var hoy = d.getFullYear() + '-' + (mes<10 ? '0' : '') + mes + '-' + (dia<10 ? '0' : '') + dia;
		}else {
		var hoy = d.getFullYear() + '-' + (mes<10 ? '0' : '') + mes + '-' + (dia<10 ? '0' : '') + dia + ' '+ hh+':'+mm+':'+ss;}
		return hoy;
		//alert(hoy);
	}
	fecha_actual = function(mode){
		var d = new Date();
		var mes = d.getMonth()+1;
		var dia = d.getDate();
		var hh = d.getHours();
		var mm = d.getMinutes();
		var ss = d.getSeconds();
		if(mode == 'onlyDate'){
			var hoy = d.getFullYear() + '-' + (mes<10 ? '0' : '') + mes + '-' + (dia<10 ? '0' : '') + dia;
		}else {
		var hoy = d.getFullYear() + '-' + (mes<10 ? '0' : '') + mes + '-' + (dia<10 ? '0' : '') + dia + ' '+ hh+':'+mm+':'+ss;}
		return hoy;
		//alert(hoy);
	}
	/* type = anios. Se usa para que se retorne solo la edad en años
		Si la variable type no esta presente se devuelve a edad en años.meses
	 */
    edad = function(f1, f2, type){
		var aFecha1 = f1.split('-'); 
		var aFecha2 = f2.split('-'); 
		var fFecha1 = Date.UTC(aFecha1[0],aFecha1[1]-1,aFecha1[2]); 
		var fFecha2 = Date.UTC(aFecha2[0],aFecha2[1]-1,aFecha2[2]); 
		var dif = fFecha2 - fFecha1;
		var dias = ( Math.floor(dif / (1000 * 60 * 60 * 24 )) ) ; 

		if( dias >= 365 ){
			var anos = Math.floor(dias/365);
			var meses = Math.floor(((dias%365)/30));
			var edad = anos+'.'+meses;

			if( type == 'anios' ){
				var edad = anos;
			}

		}else{
			var meses = Math.floor(dias%365);
			var edad = meses;
			if(edad>=12){
				var meses = Math.floor(dias/30);
				var edad = '0.' + meses;
			} else {
				var edad = '0.0.'+dias;
			}
		}
		return edad;
	}


	
});/*document.ready END*/

(function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };


})(jQuery);/*SERIALIZE*/

