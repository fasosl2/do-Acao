import React from 'react';
import { MdEmail, MdLock} from 'react-icons/md'
import { useNavigate } from 'react-router-dom';
import { useForm } from "react-hook-form";
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from "yup";

import { Button } from '../../components/Button';
import { Input } from '../../components/Input';
import {Container, ContainerSection} from '../../styles/global';

import{ api } from "../../services/api"
import { CriarText, EsqueciText, Row, SubTitleLogin, Title, TitleLogin, Wrapper} from './styles';
import { IFormData } from './types';

const schema = yup.object({
    email: yup.string().email('email não é válido').required('Campo Obrigatório'),
    password: yup.string().min(3,'no mínimo 3 caracteres').required('Campo Obrigatório'),
    }).required();

const NewUser = () => {
    const navigate = useNavigate();

    const { control, handleSubmit, formState: { errors,isValid } } = useForm<IFormData>({
        resolver: yupResolver(schema),
        mode: 'onSubmit'
    });

    console.log(isValid,errors);

    const onSubmit = async (formData: IFormData) => {
        try{
            const {data} = await api.get(`users?email=${formData.email}&senha=${formData.password}`);
            if(data.length){
                navigate('/feed')
            }else{
                alert('Email e/ou senha inválido')
            }
        }catch{
            alert('Houve algum erro!')
        }
    };


    return(<> 
        <Container>
            <ContainerSection>
                <Title>
                    Aqui você ajuda novos leitores e o meio ambiente.
                </Title>
            </ContainerSection>
            <ContainerSection>
                <Wrapper>
                    <TitleLogin>Faça seu cadastro</TitleLogin>
                    <SubTitleLogin>Faça seu login e do-Ação</SubTitleLogin>
                    <form onSubmit={handleSubmit(onSubmit)}>
                        <Input name="email" errorMessage={errors?.email?.message} control={control} placeholder="E-mail" leftIcon={<MdEmail />}/>
                        <Input name="password" errorMessage={errors?.password?.message} control={control} placeholder="Senha" type="password" leftIcon={<MdLock />}/>
                        <Button title="Entrar" variant="secondary" type="submit"/>
                    </form>
                    <Row>
                        <EsqueciText>Esqueci a senha</EsqueciText>
                        <CriarText>Criar Conta</CriarText>
                    </Row>
                </Wrapper>
            </ContainerSection>
        </Container>
    </>)
}

export { NewUser }