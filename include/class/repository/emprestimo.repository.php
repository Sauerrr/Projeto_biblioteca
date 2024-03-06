<?php

class AutorRepository implements Repository{
    public static function listAll(){
        $db = DB::getInstance();

        $sql = "SELECT * FROM emprestimo";

        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as $row){
            $emprestimo = new emprestimo;
            $emprestimo->setId($row->id);
            $emprestimo->setLivroId($row->livro_id);
            $emprestimo->setClienteId($row->cliente_id);
            $emprestimo->setDataVencimento($row->data_vencimento);
            $emprestimo->setDataInclusao($row->data_inclusao);
            $emprestimo->setDataRenovacao($row->data_renovacao);
            $emprestimo->setDataDevolucao($row->data_devolucao);
            $emprestimo->setDataAlteracao($row->data_alteracao);
            $emprestimo->setInclusaoFuncionarioId($row->inclusao_funcionario_id);
            $emprestimo->setAlteracaoFuncionarioId($row->alteracao_funcionario_id);
            $emprestimo->setRenovacaoFuncionarioId($row->renovacao_funcionario_id);
            $emprestimo->setDevolucaoFuncionarioId($row->devolucao_funcionario_id);

            $list[] = $emprestimo;

        }

        return $list;
    }

    public static function get($id){
        $db = DB::getInstance();

        $sql = "SELECT * FROM autor WHERE id = :id";

        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();

        if($query->rowCount() > 0 ){
            $row = $query->fetch(PDO::FETCH_OBJ);

            $emprestimo = new emprestimo;
            $emprestimo->setId($row->id);
            $emprestimo->setLivroId($row->livro_id);
            $emprestimo->setClienteId($row->cliente_id);
            $emprestimo->setDataVencimento($row->data_vencimento);
            $emprestimo->setDataInclusao($row->data_inclusao);
            $emprestimo->setDataRenovacao($row->data_renovacao);
            $emprestimo->setDataDevolucao($row->data_devolucao);
            $emprestimo->setDataAlteracao($row->data_alteracao);
            $emprestimo->setInclusaoFuncionarioId($row->inclusao_funcionario_id);
            $emprestimo->setAlteracaoFuncionarioId($row->alteracao_funcionario_id);
            $emprestimo->setRenovacaoFuncionarioId($row->renovacao_funcionario_id);
            $emprestimo->setDevolucaoFuncionarioId($row->devolucao_funcionario_id);

            return $emprestimo;
        }
        return null;
    }
    public static function insert ($obj){}
    public static function update ($obj){}
    public static function delete ($id){}


}


?>