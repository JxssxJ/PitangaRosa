from elevenlabs import generate, play, voices, set_api_key, save, User, Voice, VoiceSettings

chave_eleven = "0cb433f2d4205b0ee123d1d1172c9eaa"

set_api_key(chave_eleven)

# Pausas entre frases: <break time="0.5s" />
# Pausas entre palavras: - ou ...

resumo_do_texto = """
<break time="1s" /> CAPIM-CIDREIRA <break time="2s" /> 
Possui ação antibacteriana, analgésica e anti-inflamatória.<break time="0.3s" /> 
Planta diurética, ajuda a melhorar a digestão e tratar alterações do estômago.<break time="0.3s" /> 
Auxilia no combate a insônia, tem propriedade calmantes.<break time="0.3s" />  Auxilia na produção de leite para gestantes,<break time="0.5s" />
Tem propriedades antissépticas capazes de eliminar as bactérias ruins do intestino, ao mesmo tempo em que ajuda as bactérias boas.<break time="0.5s" />
Auxilia a aliviar a gripe, diminuindo a tosse, a asma e o excesso de secreção, quando utilizada na aromaterapia. <break time="1.5s" />
Função fito energética: <break time="1s" />
Traz um sono vitalizador e energizante, gera harmonia e elimina a ansiedade, pesadelos, insônia e desordens do sono."""

# Escolha sua voz
voz_escolhida = "Bella" 

#Configure a voz
# Increasing variability can make speech more expressive with output varying between re-generations. It can also lead to instabilities.
# Increasing stability will make the voice more consistent between re-generations, but it can also make it sounds a bit monotone. On longer text fragments we recommend lowering this value.
stability=0.35

#Low values are recommended if background artifacts are present in generated speech.
#High enhancement boosts overall voice clarity and target speaker similarity. Very high values can cause artifacts, so adjusting this setting to find the optimal value is encouraged.
similarity_boost=0.4

#High values are recommended if the style of the speech should be exaggerated compared to the uploaded audio. Higher values can lead to more instability in the generated speech. Setting this to 0.0 will greatly increase generation speed and is the default setting.
style=0.55

# Boost the similarity of the synthesized speech and the voice at the cost of some generation speed.
boost = False

# defina se quer ouvir o texto e se quer salvar o arquivo # O arquivo pode ser baixado no site tbm
falar = True
save_file = True

user = User.from_api()
restantes = user.subscription.character_limit - user.subscription.character_count
print("Restantes:", restantes, "Total:", user.subscription.character_limit)

caracteres_total = len(''.join(resumo_do_texto))
print("Total de caracteres", caracteres_total)

if restantes < caracteres_total:
    print("Não vai dar pra printar tudo")
    gerar = False
else:
    print("Creditos suficientes")

# retira new lines
text = []
for t in resumo_do_texto:
    if len(t) > 1:
        text.append(t)
voices = voices()
voice = None

for index, voz in enumerate(voices):
    print("voz", index, voz.name)
    if voz_escolhida in voz.name:
        print("Escolhida", voz.name)
        voice = voz.voice_id

audio = generate(
    text=resumo_do_texto,
    voice=Voice(voice_id=voice,
                settings=VoiceSettings(stability=stability,
                                       similarity_boost=similarity_boost,
                                       style=style,
                                       use_speaker_boost=boost)),
    model='eleven_multilingual_v2'
)

if falar:
    print("Falando")
    play(audio)
if save_file:
    import time
    hora = time.strftime("%Y%m%d-%H%M%S")
    filename = "./audio_elevenlabs/" + voz_escolhida + "_" + hora + ".mp3"
    print("salvando", filename)
    save(audio=audio,  # Audio bytes (returned by generate)
         filename=filename  # Filename to save audio to (e.g. "audio.wav")
         )