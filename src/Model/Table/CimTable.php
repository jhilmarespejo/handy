<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CimTable extends Table{
	//var $name = 'Familiares';

	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		/*$this->hasMany('Personal', [
			//'foreignKey' => 'id_cim',
		]);*/
	}

	
	public function validationDefault(Validator $validator)
	{

		$validator = new Validator();
		return $validator
			->notEmpty('id_cim')
			->notEmpty('nombre');
			/*->notEmpty('responsable')
			->notEmpty('distrito')
			->notEmpty('zona')
			->notEmpty('numero')
			->notEmpty('numero_ninos')
			->notEmpty('administracion')
			->notEmpty('infraestructura_pertenece')
			->notEmpty('cocina')
			->notEmpty('bano')
			->notEmpty('patio')
			->notEmpty('muro_perimetral')
			->notEmpty('almacen')
			->notEmpty('comedor')
			->notEmpty('sala_psicomotricidad')
			->notEmpty('agua')
			->notEmpty('electricidad')
			->notEmpty('alcantarillado')
			->notEmpty('gas')
			->notEmpty('familias_beneficiadas')
			->notEmpty('cantidad_educadoras')
			->notEmpty('cantidad_manipuladoras');*/
		
	}
	/*public function isValidRole($value, array $context)
	{
		return in_array($value, ['nombre', 'responsable', 'distrito'], true);
	}*/
}//class

/*id_cim, nombre, responsable, fecha_inauguracion, distrito, zona, calle, numero, telf, email, numero_ninos, aportes_ppff, administracion, infraestructura_pertenece, cocina, bano, patio, muro_perimetral, almacen, comedor, sala_psicomotricidad, otro_ambiente, aulas_independientes, cantidad_aulas, aulas_detalle, agua, agua_detalle, electricidad, electricidad_detalle, alcantarillado, alcantarillado_detalle, gas, gas_detalle, familias_beneficiadas, ninos_becados, cantidad_educadoras, cantidad_manipuladoras*/
?>