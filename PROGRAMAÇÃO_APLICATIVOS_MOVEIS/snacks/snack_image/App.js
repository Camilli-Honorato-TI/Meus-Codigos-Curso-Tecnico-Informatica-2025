import React from 'react';
import { View, Image, StyleSheet, Text } from 'react-native';

// URL de uma imagem online para exemplo
const imagemLink =
  'https://blog.destraveescale.com.br/content/images/size/w2000/2024/03/vender-na-shopee.jpg';

// Imagem local carregada corretamente do assets (use require diretamente)
const imagemLocal = require('./assets/shopee.png');

export default function App() 
{
  return (
    <View style={styles.container}>
      {/* Título para a imagem local */}
      <Text style={styles.titulo}>Imagem Local (do Assets)</Text>
      {/* Exibe imagem local com require e tratamento de erro */}
      <Image
        source={imagemLocal} // require direto, sem { uri: }
        style={styles.imagemLocal}
        resizeMode="contain" // Ajusta sem distorção
        onError={(error) => console.log('Erro ao carregar imagem local:', error.nativeEvent.error)} // Para depuração no Snack
      />

      {/* Título para a imagem online */}
      <Text style={styles.titulo}>Imagem Online</Text>
      {/* Exibe imagem de um link externo */}
      <Image
        source={{ uri: imagemLink }} // URI para remota
        style={styles.imagemOnline}
        resizeMode="cover" // Cobre o espaço, pode cortar
        onError={(error) => console.log('Erro ao carregar imagem online:', error.nativeEvent.error)} // Para depuração
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#f0f0f0',
  },
  imagemLocal: {
    width: 150,
    height: 150,
    marginBottom: 20,
    borderWidth: 2,
    borderColor: 'orangered',
    borderRadius: 10,
  },
  imagemOnline: {
    width: 150,
    height: 150,
    borderRadius: 10,
    borderWidth: 2,
    borderColor: 'yellow',
  },
  titulo: {
    fontSize: 18,
    fontWeight: 'bold',
    marginVertical: 10,
  },
});