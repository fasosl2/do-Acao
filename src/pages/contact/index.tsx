import React from 'react';
import  bannerImage from '../../assets/logo.png'
import { MdEmail, MdMessage} from 'react-icons/md'
import { useNavigate } from 'react-router-dom';
import { useForm } from "react-hook-form";
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from "yup";

import { Button } from '../../components/Button';
import { Input } from '../../components/Input';
import {Container, ContainerSection} from '../../styles/global';

import{ api } from "../../services/api"
import { SubTitleLogin, TitleLogin, Wrapper} from './styles';
import { IFormData } from './types';
import { HomeBanner } from '../home/styles';

const schema = yup.object({
    email: yup.string().email('email não é válido').required('Campo Obrigatório'),
    subject: yup.string().min(3,'no mínimo 3 caracteres').required('Campo Obrigatório'),
    message: yup.string().required('Campo Obrigatório'),
    }).required();

const Contact = () => {
    const navigate = useNavigate();

    const { control, handleSubmit, formState: { errors,isValid } } = useForm<IFormData>({
        resolver: yupResolver(schema),
        mode: 'onSubmit'
    });

    console.log(isValid,errors);

    const onSubmit = async (formData: IFormData) => {
        try{
            // const {data} = await api.get(`users?email=${formData?.email}&subject=${formData?.subject}`);
            // if(data.length){
            //     navigate('/feed')
            // }else{
            //     alert('Email e/ou senha inválido')
            // }
            
            alert(`users?email=${formData?.email}&subject=${formData?.subject}`)
        }catch{
            alert('Houve algum erro!')
        }
    };


    return(<>
        <Container>
            <ContainerSection>
                <Wrapper>
                    <TitleLogin>Contato</TitleLogin>
                    <SubTitleLogin>Deixe aqui suas críticas, elogios e sugestões.</SubTitleLogin>
                    <form onSubmit={handleSubmit(onSubmit)}>
                        <Input name="email" errorMessage={errors?.email?.message} control={control} placeholder="E-mail" leftIcon={<MdEmail />}/>
                        <label>Assunto</label>
                        <br/>
                            <Input type='radio' name="subject" errorMessage={errors?.subject?.message} control={control}
                            options={[
                            {label:'Elogio', value:'praise'},
                            {label:'Crítica', value:'criticism'},
                            {label:'Sugestão', value:'suggestion'}]}
                            />
                        <br/>
                        <label>Mensagem</label>
                        <Input name="message" type='textarea' errorMessage={errors?.message?.message} control={control} placeholder="Mensagem" leftIcon={<MdMessage />}/>
                        <Button title="Enviar" variant="secondary" type="submit"/>
                    </form>
                </Wrapper>
            </ContainerSection>
            <ContainerSection>
                <HomeBanner src={bannerImage} alt="Imagem Principal" />
            </ContainerSection>
        </Container>
    </>)
}

export { Contact }