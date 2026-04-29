-- Selecionar banco de dados
use aulaphp;

insert into CadastroAlunos(regAluno, nome, email, celular) 
values(1001, "Fulano de Tal", "exemplo@exemplo.com", "31960706070"),
(1002, "Ciclano de Tal", "exemplo2@exemplo.com","31960706070");

-- values ($regAluno, $nome, $email, $celular)

-- Criar tabela
create table CadastroAlunos(
id_cadastroAlunos int primary key auto_increment,
regAluno int not null,
nome varchar(50) not null,
email varchar(50) not null,
celular varchar(20)
);