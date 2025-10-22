import React, { useState, useEffect } from 'react';
import { View, Text, TextInput, StyleSheet, ScrollView, StatusBar, TouchableOpacity, ActivityIndicator } from 'react-native';
import * as Animatable from 'react-native-animatable';

export default function App() {
  const [showSplash, setShowSplash] = useState(true);
  const [nome, setNome] = useState('');
  const [email, setEmail] = useState('');
  const [dadosInseridos, setDadosInseridos] = useState(null);
  const [mostrarRelatorio, setMostrarRelatorio] = useState(false);
  const [showPassword, setShowPassword] = useState(false);

  // Controla a duração da Splash Screen
  useEffect(() => {
    const timer = setTimeout(() => {
      setShowSplash(false);
    }, 3000); // Splash por 3 segundos
    return () => clearTimeout(timer);
  }, []);

  const handleSubmit = () => {
    if (nome && email) {
      setDadosInseridos({ nome, email });
      setMostrarRelatorio(true);
    } else {
      alert('Por favor, preencha todos os campos!');
    }
  };

  const handleClear = () => {
    setNome('');
    setEmail('');
    setMostrarRelatorio(false);
    setDadosInseridos(null);
  };

  const handleExit = () => {
    alert('Saindo...');
  };

  // Se estiver mostrando o Splash
  if (showSplash) {
    return (
      <View style={styles.splashContainer}>
        <StatusBar hidden />
        <Animatable.View
          animation={{
            0: { opacity: 0, scale: 0.5, rotate: '0deg' },
            0.5: { opacity: 1, scale: 1.2, rotate: '180deg' },
            1: { opacity: 1, scale: 1, rotate: '360deg' },
          }}
          duration={2000}
          style={styles.logoContainer}
        >
          <Text style={styles.logoText}>Benvenuto!</Text>
        </Animatable.View>
        <Animatable.View
          animation={{
            0: { backgroundColor: '#0ECCB9' },
            0.5: { backgroundColor: '#24CC0E' },
            1: { backgroundColor: '#CCCC0E' },
          }}
          duration={3000}
          style={StyleSheet.absoluteFillObject}
        />
      </View>
    );
  }

  // Formulário de login
  return (
    <ScrollView style={styles.container}>
      <StatusBar barStyle="light-content" />
      <Text style={styles.title}>Login</Text>
      <View style={styles.form}>
        <Text style={styles.label}>E-mail:</Text>
        <TextInput
          style={styles.input}
          value={nome}
          onChangeText={setNome}
          placeholder="Digite seu e-mail"
          placeholderTextColor="#aaa"
          keyboardType="email-address"
        />
        <Text style={styles.label}>Senha:</Text>
        <TextInput
          style={styles.input}
          value={email}
          onChangeText={setEmail}
          placeholder="Digite sua senha"
          placeholderTextColor="#aaa"
          secureTextEntry={!showPassword}
        />
        <TouchableOpacity
          style={styles.showPasswordButton}
          onPress={() => setShowPassword((prev) => !prev)}
        >
          <Text style={styles.showPasswordText}>
            {showPassword ? 'Ocultar Senha' : 'Mostrar Senha'}
          </Text>
        </TouchableOpacity>
        <View style={styles.buttonGroup}>
          <TouchableOpacity style={styles.btnEnviar} onPress={handleSubmit}>
            <Text style={styles.btnText}>Mostrar Relatório</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.BtnLimpar} onPress={handleClear}>
            <Text style={styles.btnText}>Limpar Campos</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.btnSair} onPress={handleExit}>
            <Text style={styles.btnText}>Sair</Text>
          </TouchableOpacity>
        </View>
      </View>

      {mostrarRelatorio && dadosInseridos && (
        <View style={styles.relatorio}>
          <Text style={styles.relatorioTitle}>Relatório de Dados Inseridos</Text>
          <Text>Nome: {dadosInseridos.nome}</Text>
          <Text>Email: {dadosInseridos.email}</Text>
          <Text>Data de Submissão: {new Date().toLocaleString()}</Text>
        </View>
      )}
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  splashContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#222',
  },
  logoContainer: {
    justifyContent: 'center',
    alignItems: 'center',
    zIndex: 1,
  },
  logoText: {
    fontSize: 48,
    fontWeight: 'bold',
    color: '#fff',
    textShadowColor: '#000',
    textShadowOffset: { width: 2, height: 2 },
    textShadowRadius: 5,
  },
  container: {
    flex: 1,
    padding: 20,
    backgroundColor: '#111',
  },
  title: {
    fontSize: 26,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 20,
    color: 'lightgray',
  },
  form: {
    marginBottom: 20,
  },
  label: {
    fontSize: 16,
    marginBottom: 8,
    fontWeight: 'bold',
    color: 'lightgray',
  },
  input: {
    borderWidth: 1,
    borderColor: '#444',
    padding: 12,
    marginBottom: 20,
    borderRadius: 8,
    backgroundColor: '#333',
    color: '#fff',
    fontSize: 16,
  },
  showPasswordButton: {
    marginBottom: 20,
    alignItems: 'center',
  },
  showPasswordText: {
    color: '#007BFF',
    fontSize: 16,
    fontWeight: 'bold',
  },
  buttonGroup: {
    flexDirection: 'column',
    alignItems: 'center',
    backgroundColor: '#222',
    paddingVertical: 10,
    borderRadius: 8,
    borderWidth: 1,
    borderColor: '#444',
  },
  btnEnviar: {
    backgroundColor: '#4CAF50',
    paddingVertical: 10,
    paddingHorizontal: 20,
    borderRadius: 8,
    alignItems: 'center',
    elevation: 3,
    marginBottom: 10,
    width: '100%',
  },
  BtnLimpar: {
    backgroundColor: '#FFC107',
    paddingVertical: 10,
    paddingHorizontal: 20,
    borderRadius: 8,
    alignItems: 'center',
    elevation: 3,
    marginBottom: 10,
    width: '100%',
  },
  btnSair: {
    backgroundColor: '#F44336',
    paddingVertical: 10,
    paddingHorizontal: 20,
    borderRadius: 8,
    alignItems: 'center',
    elevation: 3,
    width: '100%',
  },
  btnText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: 'bold',
  },
  relatorio: {
    backgroundColor: '#222',
    padding: 20,
    borderRadius: 8,
    marginTop: 10,
    borderWidth: 1,
    borderColor: '#444',
  },
  relatorioTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: 'lightgray',
    marginBottom: 10,
  },
});
