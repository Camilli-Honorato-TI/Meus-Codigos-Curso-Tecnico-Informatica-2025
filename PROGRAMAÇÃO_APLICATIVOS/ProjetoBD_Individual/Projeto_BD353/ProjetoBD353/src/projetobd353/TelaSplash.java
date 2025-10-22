package projetobd353;

import javax.swing.SwingUtilities;

public class TelaSplash extends javax.swing.JFrame {

    public TelaSplash() {
        initComponents();
        AnimarBarraProgresso(50);
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jProgressBar1 = new javax.swing.JProgressBar();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Tela de Abertura do Sistema");
        setMinimumSize(new java.awt.Dimension(746, 470));
        setPreferredSize(new java.awt.Dimension(746, 470));
        setSize(new java.awt.Dimension(746, 470));
        getContentPane().setLayout(null);

        jLabel1.setFont(new java.awt.Font("Linux Libertine G", 3, 48)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(0, 153, 153));
        jLabel1.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel1.setText("Sistema quebra sono");
        getContentPane().add(jLabel1);
        jLabel1.setBounds(140, 30, 450, 40);

        jLabel2.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(0, 0, 255));
        jLabel2.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel2.setText("Versão: v1.0 (Begin)");
        jLabel2.setToolTipText("");
        getContentPane().add(jLabel2);
        jLabel2.setBounds(270, 300, 150, 20);

        jLabel3.setForeground(new java.awt.Color(0, 0, 0));
        jLabel3.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel3.setText("Carregando...");
        getContentPane().add(jLabel3);
        jLabel3.setBounds(270, 330, 80, 16);

        jLabel4.setIcon(new javax.swing.ImageIcon(getClass().getResource("/projetobd353/Imagem/splash.jpg"))); // NOI18N
        jLabel4.setToolTipText("");
        getContentPane().add(jLabel4);
        jLabel4.setBounds(210, 100, 290, 180);
        getContentPane().add(jProgressBar1);
        jProgressBar1.setBounds(270, 350, 146, 20);

        pack();
    }// </editor-fold>//GEN-END:initComponents


    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new TelaSplash().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JProgressBar jProgressBar1;
    // End of variables declaration//GEN-END:variables

//Criação dos meus métodos/procedures, ...
    // Métodos criados da GUI
    private void AnimarProgressBar(int Tempo) 
    { new Thread(() -> 
      { for (int i = 0; i <= 100; i++) 
        { final int progress = i;
          // Atualiza a barra de progresso na thread da UI
         SwingUtilities.invokeLater(() -> jProgressBar1.setValue(progress));
          try { // Tempo em 0ms para incremento, ~5 segundos no total
                Thread.sleep(Tempo); 
              } catch (InterruptedException e) { e.printStackTrace(); }
        }
        // Após completar, fecha a tela splash e abre a tela de login
        SwingUtilities.invokeLater(() -> 
        { 
          dispose(); // Fecha a tela splash
          //new TelaLogin().setVisible(true); // Abre a tela de login
          TelaLogin TLogin = new TelaLogin();
          TLogin.setBounds(5, 5, 600, 300);
          TLogin.setVisible(true);
          
        });
      }).start();
     }
    
}
