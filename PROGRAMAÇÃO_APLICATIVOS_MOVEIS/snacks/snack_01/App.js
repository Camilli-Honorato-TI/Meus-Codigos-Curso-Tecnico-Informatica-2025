import React from 'react';
import { StyleSheet, Text, View, Image } from 'react-native';

export default function App() {
  return (
    <View style={styles.container}>
      <Text style={styles.title}>✨Meu Primeiro teste✨</Text>
      <Text style={styles.paragraph}>Bruno & Camilli</Text>
      <Text style={styles.paragraph}>Cedup Pd.Movel - 2025</Text>
      <Text style={styles.Makita}>Fica Avisado Os Cara Ta Na Maldade</Text>
      <Image source={require('./assets/Maldade.jpg')} style={styles.image} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#212121',
  },
  title: {
    margin: 20,
    fontSize: 30,
    fontWeight: '700',
    textAlign: 'center',
    color: '#DEC21B',
    backgroundColor: '#fff',
    borderRadius: 10,
    padding: 10,
  },
  Makita: {
    margin: 5,
    fontSize: 30,
    fontWeight: '900',
    textAlign: 'center',
    color: '#FF0000',
    backgroundColor: '#EDE1E1',
    borderRadius: 10,
    padding: 10,
  },
  paragraph: {
    margin: 10,
    fontSize: 30,
    fontWeight: '500',
    textAlign: 'center',
    color: '#111',
    backgroundColor: '#fff',
    borderRadius: 10,
    padding: 10,
  },
  image: {
    width: 300,
    height: 300,
    resizeMode: 'cover',
    borderRadius: 10,
    marginTop: 10,
  },
});