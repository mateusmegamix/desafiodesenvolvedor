<?php
/** @package    Desafiodesenvolvedor::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Usuario object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Desafiodesenvolvedor::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class UsuarioReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `usuarios` table
	public $CustomFieldExample;

	public $Id;
	public $Nome;
	public $DataDeNascimento;
	public $Sexo;
	public $DataDeCadastro;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`usuarios`.`id` as Id
			,`usuarios`.`nome` as Nome
			,`usuarios`.`data_de_nascimento` as DataDeNascimento
			,`usuarios`.`sexo` as Sexo
			,`usuarios`.`data_de_cadastro` as DataDeCadastro
		from `usuarios`";

		// os critérios podem ser usados ou você pode escrever sua própria lógica personalizada.
		// certifique-se de escapar qualquer entrada do usuário com $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `usuarios`";

		// os critérios podem ser usados ou você pode escrever sua própria lógica personalizada.
		// certifique-se de escapar qualquer entrada do usuário com $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>