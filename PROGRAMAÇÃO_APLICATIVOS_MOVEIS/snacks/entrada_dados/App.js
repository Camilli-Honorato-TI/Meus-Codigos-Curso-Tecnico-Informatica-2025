import React, { useState } from 'react';
import { View, Text, TextInput, Button, StyleSheet, ScrollView, } from 'react-native';

export default function App() 
{
  const [nome, setNome] = useState('');
  const [email, setEmail] = useState('');
  const [dadosInseridos, setDadosInseridos] = useState(null);
  const [mostrarRelatorio, setMostrarRelatorio] = useState(false);

  const EntradaDados = () => 
  {
    if (nome && email) 
    {
      setDadosInseridos({ nome, email });
      setMostrarRelatorio(true);
    } else { alert('Por favor, preencha todos os campos!'); }
  };

  return (
    <ScrollView style={styles.container}>
      <Text style={styles.title}>Formulário de Entrada de Dados</Text>
      
      <View style={styles.form}>
        <Text style={styles.label}>Nome:</Text>
        <TextInput
          style={styles.Entrada}
          value={nome}
          onChangeText={setNome}
          placeholder="Digite seu nome"
        />
        
        <Text style={styles.label}>Email:</Text>
        <TextInput
          style={styles.Entrada}
          value={email}
          onChangeText={setEmail}
          placeholder="Digite seu email"
          keyboardType="email-address"
        />
        
        <Button title="Mostrar Relatório" onPress={EntradaDados} />
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
  container: {
    flex: 1,
    padding: 20,
    backgroundColor: '#f5f5f5',
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 20,
  },
  form: {
    marginBottom: 20,
  },
  label: {
    fontSize: 18,
    marginBottom: 5,
    fontWeight: 'bold',
  },
  Entrada: {
    borderWidth: 1,
    borderColor: '#ccc',
    padding: 10,
    marginBottom: 15,
    borderRadius: 5,
    backgroundColor: '#fff',
  },
  relatorio: {
    backgroundColor: '#fff',
    padding: 15,
    borderRadius: 5,
    marginTop: 10,
    borderWidth: 1,
    borderColor: '#ddd',
  },
  relatorioTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 10,
  },
});