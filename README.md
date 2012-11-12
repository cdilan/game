GAME CDILan
=============

Game de educação empreendedora colaborativa para lan houses

Instruções
----------

- Após clonar o projeto, configure seu arquivo wp-config.php com as configurações de sua base de dados local.
- Ative o tema GAME CDILan
- Adicione uma página com o slug 'episodios' e especifique nela o modelo de página 'Lista de Episódios'
- Utilize a estrutura de permalinks personalizada: /%category%/%postname%/
- Ative e configure o plugin Formidable
- Cadastre Atividades e classifique-as por Episódios
- Crie um formulário no Formidable e insira o shortcode na atividade
- Configure uma página estática como página incial

IMPORTANTE
----------

 - O Formidable cria tabelas exclusivas no MySQL e tem um 'BUG' quando baixado para localhost
 	- Algumas configurações dos formulários, custom displays e settigns não são ativados corretamentes
 	- Solução -> verificar os FRMs ao adicioná-los nas atividades e páginas.

Últimas implementações
----------------------

- Ajustes no layout
- Login
- Permissões

Próximos passos
---------------

- Comentários
- Novidades