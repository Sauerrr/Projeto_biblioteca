<?php

class EmprestimoRepository implements Repository{
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
    public static function insert ($obj){
        $db = DB::getInstance();
    
            $sql = "INSERT INTO emprestimo (livro_id, cliente_id, data_vencimento, data_devolucao , data_inclusao, inclusao_funcionario_id) VALUES (:livro_id, :cliente_id , :data_vencimento, :data_devolucao ,  :data_inclusao, :inclusao_funcionario_id)";
            
            $query = $db->prepare($sql);

            $query->bindValue(":livro_id",$obj->getLivroId());
            $query->bindValue(":cliente_id",$obj->getClienteId());
            $query->bindValue(":data_vencimento",$obj->getDataVecimento());
            $query->bindValue(":data_devolucao",$obj->getDataDevolucao());
            $query->bindValue(":data_inclusao",$obj->getDataInclusao());
            $query->bindValue(":inclusao_funcionario_id",$obj->getInclusaoFuncionarioId());
    
            $query->execute();
    
            $id = $db->lastInsertId();
            
            return $id;
    }
    public static function update ($obj){
        $db = DB::getInstance();

        $sql = "UPDATE emprestimo SET livro_id = :livro_id, data_alteracao = :data_alteracao, alteracao_funcionario_id = :alteracao_funcionario_id, data_renovacao = :data_renovacao WHERE id = :id";

        $query = $db->prepare($sql);
        $query->bindValue(":livro_id", $obj->getLivroId());
        $query->bindValue(":data_alteracao", $obj->getDataAlteracao());
        $query->bindValue(":data_renovacao", $obj->getDatarenovacao());
        $query->bindValue(":inclusao_funcionario_id", $obj->getInclusaoFuncionarioId());
        $query->bindValue(":id", $obj->getId());
        $query->execute();

    }
    public static function delete ($id){
        $db = DB::getInstance();

        $sql = "DELETE FROM emprestimo WHERE id = :id";

        $query = $db->prepare($sql);
        $query->bindValue(":id", $id);
        $query->execute();
    }


}


?>