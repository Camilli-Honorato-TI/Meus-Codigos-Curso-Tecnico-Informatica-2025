import { View, Text, StyleSheet } from 'react-native';

export default function App() {
  // ALUNO: MODIFIQUE AQUI SEUS DADOS 
  const nome = "Camilli Vitória Salvaro Honorato";
  const idade = "17 anos ";
  const turma = "Trilha IV - Mobile";
  const hobby = "Cozinhar";
  
  return (
    <View style={styles.container}>
      <Text style={styles.titulo}>MEU PERFIL</Text>
      
      <View style={styles.card}>
        <Text style={styles.label}>Nome:</Text>
        <Text style={styles.valor}>{nome}</Text>
      </View>

      <View style={styles.card}>
        <Text style={styles.label}>Idade:</Text>
        <Text style={styles.valor}>{idade}</Text>
      </View>

      <View style={styles.card}>
        <Text style={styles.label}>Turma:</Text>
        <Text style={styles.valor}>{turma}</Text>
      </View>

      <View style={styles.card}>
        <Text style={styles.label}>Hobby:</Text>
        <Text style={styles.valor}>{hobby}</Text>
      </View>

      <Text style={styles.rodape}>CEDUP - 2025</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#be2929', // ALUNO: MUDE ESTA COR!
    padding: 20,
    justifyContent: 'center',
  },
  titulo: {
    fontSize: 28,
    fontWeight: 'bold',
    color: '#ffffff',
    textAlign: 'center',
    marginBottom: 30,
    fontFamily: 'fadilha',
  },
  card: {
    backgroundColor: 'white',
    padding: 15,
    borderRadius: 10,
    marginBottom: 15,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 4,
    elevation: 3,
  },
  label: {
    fontSize: 16,
    fontWeight: 'bold',
    color: '#ff0015',
    marginBottom: 5,
    fontFamily: 'verdana',
  },
  valor: {
    fontSize: 18,
    color: '#fffff',
  },
  rodape: {
    fontSize: 14,
    color: 'white',
    textAlign: 'center',
    marginTop: 20,
    fontStyle: 'italic',
  },
});