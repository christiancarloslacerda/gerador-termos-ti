#  Gerador de Termos de Responsabilidade de TI

##  Sobre o Projeto
Este é um sistema desenvolvido para resolver um problema real do mundo corporativo (B2B): a lentidão na criação de documentos de entrega de equipamentos. 

Em vez do setor de RH ou TI preencher contratos manualmente no Word toda vez que um novo funcionário entra na empresa, este sistema coleta as informações em um formulário e gera automaticamente o Termo de Responsabilidade com as cláusulas corretas.

##  Funcionalidades e Regras de Negócio
- **Geração Dinâmica:** O texto do contrato muda dependendo do equipamento (ex: alertas sobre roubo para Notebooks/Smartphones e alertas de uso interno para Desktops).
- **Tratamento de Dados:** Transforma seleções múltiplas de acessórios em um texto contínuo e legível.
- **Regras de Departamento:** Adiciona automaticamente cláusulas de Suporte VIP caso o equipamento seja destinado à Diretoria.
- **Validação:** Bloqueia a geração do termo se algum dado obrigatório **não** for preenchido.

##  Tecnologias Utilizadas
- **PHP 8:** Utilizado para a lógica, recepção de dados (`POST`), validação (`isset`/`empty`).
- **HTML5:** Estruturação do formulário de entrada de dados.
- **CSS3 (Básico):** Formatação do documento final para impressão.

##  Aprendizados
Este projeto foi construído focando no pilar de **Separação de Responsabilidades**, separando a camada de visualização (HTML) da camada de processamento e lógica.

##  Próximos Passos 
-  Conectar a um banco de dados MySQL para manter o histórico de entregas.
- Implementar a geração automática do termo em formato PDF para download.