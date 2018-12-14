<?php
/** @package    Desafiodesenvolvedor::Model */

/** import supporting libraries */
require_once("DAO/UsuarioDAO.php");
require_once("UsuarioCriteria.php");

/**
 * The Usuario class extends UsuarioDAO which provides the access
 * to the datastore.
 *
 * @package Desafiodesenvolvedor::Model
 * @author ClassBuilder
 * @version 1.0
 */
class Usuario extends UsuarioDAO
{

	/**
	 * Override default validation
	 * @see Phreezable::Validate()
	 */
	public function Validate()
	{
		// example of custom validation
		// $this->ResetValidationErrors();
		// $errors = $this->GetValidationErrors();
		// if ($error == true) $this->AddValidationError('FieldName', 'Error Information');
		// return !$this->HasValidationErrors();

		return parent::Validate();
	}

	/**
	 * @see Phreezable::OnSave()
	 */
	public function OnSave($insert)
	{
		// Os métodos de criação/atualização do controlador validados antes de salvar. Esta será uma
		// Verificação de validação redundante, no entanto, irá garantir a integridade dos dados no modelo
		// Baseado em regras de validação. Comentar esta linha se isso não for desejado
		if (!$this->Validate()) throw new Exception('Unable to Save Usuario: ' .  implode(', ', $this->GetValidationErrors()));

		// OnSave deve retornar true ou Phreeze cancelará a operação de salvar
		return true;
	}

}

?>
