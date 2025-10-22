package projetobd353;
import java.sql.*;

public class ConexaoBD {
     // Configurações para uso no XAMPP
   private static final String URL= "jdbc:mysql://localhost:3306/bdsyssales353?SSL=false";
   private static final String USER = "root";     // Usuário padrão
   private static final String PASSWORD = "";     // Senha padrão (vazia)

   // Criar uma Conexao com retorno
   public static Connection getConexao() throws SQLException
   {  try
      {  Class.forName("com.mysql.cj.jdbc.Driver"); }
      catch (ClassNotFoundException e)
      {  throw new SQLException("Driver MySQL não encontrado!", e); }
      // Cria e retorna para a conexão
      return DriverManager.getConnection(URL, USER, PASSWORD);
   }

   // Testa a conexão e mostra o resultado (Pode ser adaptado)
   public static void main(String[] args)
   {  System.out.println("Testando a conexão com o banco de dados");
      try (Connection conn = getConexao())
      {  System.out.println("✅ Conexão estabelecida com sucesso!");
         System.out.println("Banco de dados: " + conn.getCatalog());
         System.out.println("SGBD..........: " + conn.getMetaData().getDatabaseProductName());
         System.out.println("Versão........: " + conn.getMetaData().getDatabaseProductVersion());
      }
      catch (SQLException e)
      {  // Se desejar utilize o JOptionPane (mostrar janela com o erro).
         System.err.println("❌ Erro na conexão:");
         System.err.println("Mensagem: " + e.getMessage());
         System.err.println("Código de erro: " + e.getErrorCode());
         System.err.println("Verifique se:");
         System.err.println("- O XAMPP está rodando?");
         System.err.println("- O Nome do banco está correto?");
         System.err.println("- O Usuário/senha configurados?");
      }
   }
}
